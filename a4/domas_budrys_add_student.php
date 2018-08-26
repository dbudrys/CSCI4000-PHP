<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->
<?php 
//$studentID = filter_input(INPUT_POST, 'studentID', FILTER_VALIDATE_INT);
$majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);
$majorName = filter_input(INPUT_POST, 'majorName');
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$gender = filter_input(INPUT_POST, 'gender');


//validate input

if ($majorID == null){
	$error = "majorID is null : ". $majorID;
	include('domas_budrys_error.php');
}
else if ($majorID == false) {
	$error = "majorID is false : ". $majorID;
	include('domas_budrys_error.php');
}

else if ($firstName == null ){
	$error = "Invalid <b> First Name</b>. Check all fields and try again";
	include('domas_budrys_error.php');
	
}
else if ($lastName == null){
	$error = "Invalid <b> Last Name</b>. Check all fields and try again";
	include('domas_budrys_error.php');
}

//if everything pass validation then action below will be preformed
else {
	require_once('domas_budrys_database.php');
	$query = 'INSERT INTO STUDENT
                 (majorID, firstName, lastName, gender)
              VALUES
                 (:majorID, :firstName, :lastName, :gender)';
    $statement = $db->prepare($query);
    $statement->bindValue(':majorID', $majorID);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
	$statement->bindValue(':gender' , $gender);
    $statement->execute();
    $statement->closeCursor();
	include('index.php');
}

?>




