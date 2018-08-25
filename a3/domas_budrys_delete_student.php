<?php
	require_once('domas_budrys_database.php');

	
	$studentID = filter_input(INPUT_POST, 'studentID', FILTER_VALIDATE_INT);
	
if ($studentID != false) {
    $query = 'DELETE FROM student
              WHERE studentID = :studentID';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $studentID);
    $success = $statement->execute();
	$IDS = $statement->fetchAll();
    $statement->closeCursor();
	
	//echo 'TRUE';
	
}	else if ($studentID == false){

	//echo 'FALSE';


}

	include('index.php');
	

	
?>

