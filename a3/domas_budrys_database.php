
<?php

	$dsn = 'mysql:host=domasbud.com;dbname=dombubco_kungfu_panda_shop';
	$username = 'dombubco_panda';
	$password = 'richardchocolate';

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
