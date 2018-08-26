<!-- Domas Budrys Assignmnet 5.  04/05/2017        Question 5 -->

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
    
}// end of get_major_name()



function get_majors() {
	
    global $db;
    
    $query = 'SELECT * FROM MAJOR
              ORDER BY majorID';
	$statement = $db->prepare($query);
    $statement->execute();
    return $statement; 

	
	
}



?>