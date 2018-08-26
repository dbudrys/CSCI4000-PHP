<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->
<?php 
//$studentID = filter_input(INPUT_POST, 'studentID', FILTER_VALIDATE_INT);
$majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);
$majorName = filter_input(INPUT_POST, 'majorName');


//validate input
if ($majorName == null){
	
	$error = "Invalid <b> Major Name </b>. Check all fields and try again";
	include('domas_budrys_error.php');
}


//if everything pass validation then action below will be preformed
else {
	require_once('domas_budrys_database.php');
	$query = 'INSERT INTO MAJOR
                 (majorName)
              VALUES
                 (:majorName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':majorName', $majorName);
    $statement->execute();
    $statement->closeCursor();
	include('domas_budrys_major_list.php');
}

?>




