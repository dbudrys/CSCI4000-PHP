<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->

<?php
	require_once('domas_budrys_database.php');
	
	$studentID = filter_input(INPUT_POST, 'studentID', FILTER_VALIDATE_INT);

	//$majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);
	
	//echo $studentID . '<br>' . 'h';
	//echo $majorID . '<br>';

	
	
if ($studentID != false) {
    $query = 'DELETE FROM STUDENT
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

