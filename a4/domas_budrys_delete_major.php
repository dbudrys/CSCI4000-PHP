<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->

<?php
	require_once('domas_budrys_database.php');
	
	$majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);

	//$majorID = filter_input(INPUT_POST, 'majorID', FILTER_VALIDATE_INT);
	
	//echo $studentID . '<br>' . 'h';
	//echo $majorID . '<br>';

	
	
if ($majorID != false) {
    $query = 'DELETE FROM MAJOR
              WHERE majorID = :majorID';
    $statement = $db->prepare($query);
    $statement->bindValue(':majorID', $majorID);
    $success = $statement->execute();
	$IDS = $statement->fetchAll();
    $statement->closeCursor();
	
	//echo 'TRUE';
	
}	else if ($studentID == false){

	//echo 'FALSE';


}
	

	include('domas_budrys_major_list.php');
	


?>

