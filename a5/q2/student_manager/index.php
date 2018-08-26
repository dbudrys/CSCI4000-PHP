<!-- Domas Budrys Assignmnet 5.  04/05/2017     Question 2 -->

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
?>