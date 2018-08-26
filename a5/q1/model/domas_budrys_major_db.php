<!-- Domas Budrys Assignmnet 5.  04/05/2017        Question 1 -->

<?php

function get_major_name($majorID) {

global $db;

$queryMajor = 'SELECT *
			       FROM MAJOR
				   WHERE majorID = :majorID';
	$statement = $db->prepare($queryMajor);
	$statement -> bindValue (':majorID', $majorID);
	$statement -> execute();
	$major = $statement->fetch();
	$major_name = $major['majorName'];
	$statement->closeCursor();
    
    
	return $major_name;
    
}


?>