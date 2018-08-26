<!-- Domas Budrys Assignmnet 5.  04/05/2017     Question 5 -->

<?php

require ('../model/domas_budrys_database.php');
require ('../model/domas_budrys_major_db.php');
require ('../model/domas_budrys_student_db.php');



$action = filter_input (INPUT_POST, 'action');

if ($action == NULL) {
    $action == filter_input (INPUT_GET, 'action');
    
    if($action == NULL){
        $action = 'list_students';
        
    }// end if
}// end if






if ($action == 'list_students') {
//will get current major id

$majorID = filter_input (INPUT_GET, 'majorID', FILTER_VALIDATE_INT);
    if($majorID == NULL || $majorID == FALSE) {
        $majorID = 1;
    }
    
   // echo $majorID . '<br>';
    
    $major_name = get_major_name($majorID);
    
    $majors = get_majors();
    $students = get_student_by_major($majorID);
    

    
    
    //echo $major_name . '<br>';
    
    
    
    include ('domas_budrys_student_list.php');
    
    
}//end of if

else if ($action == 'delete_student') {
    
    $studentID = filter_input(INPUT_POST, 'studentID', FILTER_VALIDATE_INT);
    $majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);
    
    delete_student($studentID);
    
    header ("Location: .?majorID = $majorID");
    
    
    
}//end else if

else if ($action == 'show_add_form'){
	
	
	 include 'domas_budrys_student_add.php';
	 $majors = get_majors();
     
   

    
}//end if else


else if ($action == 'add_student'){
    
    $majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);
    $majorName = filter_input(INPUT_POST, 'majorName');
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $gender = filter_input(INPUT_POST, 'gender');


//Validation     
  if ($majorID == null){
	$error = "majorID is null : ". $majorID;
	include('../errors/domas_budrys_error.php');
}
else if ($majorID == false) {
	$error = "majorID is false : ". $majorID;
	include('../errors/domas_budrys_error.php');
}

else if ($firstName == null ){
	$error = "Invalid <b> First Name</b>. Check all fields and try again";
	include('../errors/domas_budrys_error.php');
	
}
else if ($lastName == null){
	$error = "Invalid <b> Last Name</b>. Check all fields and try again";
	include('../errors/domas_budrys_error.php');
}
else {
    
    add_student($majorID, $firstName, $lastName, $gender);
    
    header("Location: .?majorID = $majorID");
    
    
    
}

    
    
}//end else if


?>