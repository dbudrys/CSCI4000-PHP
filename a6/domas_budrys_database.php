
<?php
// Domas Budrys Assignmnet 6.  04/21/2017 111      Question 2

$dsn = 'mysql:host=domasbud.com;dbname=dombubco_a6';
$username = 'dombubco_budrys1';
$password = 'domasgreat';

	try {
		$db = new PDO($dsn, $username, $password);
		//echo "SUCCESS!!!";
	}
    catch (PDOException $e) {
		$error_message = $e->getMessage();
		//echo $error_message;
		include('domas_budrys_database_error.php');
		exit();
	}
?>
