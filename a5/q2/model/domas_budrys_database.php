<!-- Domas Budrys Assignmnet 5.  04/05/2017       Question 2 -->
<?php
	$dsn = 'mysql:host=domasbud.com;dbname=dombubco_a5';
	$username = 'dombubco_budrys1';
	$password = 'domasgreat';

	try {
		$db = new PDO($dsn, $username, $password);
		//echo "SUCCESS!!!";
	}
    catch (PDOException $e) {
		$error_message = $e->getMessage();
		//echo $error_message;
		include('../errors/domas_budrys_database_error.php');
		exit();
	}
?>
