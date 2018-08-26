<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->
<?php
	$dsn = 'mysql:host=domasbud.com;dbname=dombubco_a4';
	$username = 'dombubco_budrys1';
	$password = 'domasgreat';

	try {
		$db = new PDO($dsn, $username, $password);
		//echo "SUCCESS";
	}
    catch (PDOException $e) {
		$error_message = $e->getMessage();
		//echo $error_message;
		include('domas_budrys_database_error.php');
		exit();
	}
?>
