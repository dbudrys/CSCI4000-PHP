<?php 
$studentID = filter_input(INPUT_POST, 'studentID', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');


//validate input
if ($studentID == null || $studentID == false ||
        $name == null || $email == null )
{
	$error = "Invalid product data. Check all fields and try again.";
	//echo $error ."<br>";
	//include('error.php');
}

else {
	require_once('domas_budrys_database.php');
	$query = 'INSERT INTO student
                 (studentID, name, email)
              VALUES
                 (:studentID, :name, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $studentID);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
	include('index.php');
}

?>




