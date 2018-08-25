<?php
require_once('domas_budrys_database.php');
//get all categories
$query = 'SELECT *
          FROM student
          ORDER BY studentID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
/*
foreach ($categories as $category) :
	echo $category['categoryID'];
	echo "<br>";
	echo $category['categoryName'];
	echo "<br>";
endforeach;
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Domas Budrys Kung Fu School</title>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header><h1> Domas Budrys Kung Fu School</h1></header>
	
	<main>
		<h1>Add Student </h1>
		<form method="post" action="domas_budrys_add_student.php" id="add_student_form">
			<label>Student ID:</label>
			<input name="studentID" type="text" style="margin-left: 43px;">
			<br>
			<label>Name:</label>
			<input name="name" type="text" style="margin-left: 79px;">
			<br>
			<label>Email:</label>
			<input name="email" type="text" style="margin-left: 80px;">
			<br>
			<label>&nbsp;</label>
			<input type="submit" value="Add Student" style="margin-left: 120px;">
		</form>
		<p><a href="index.php">View Student List</a></p>
	</main>
	
	<footer>
		
	    <br>
		&#169; <?php echo date("Y"); ?> Domas  Budrys Kung Fu School
		</p>
	</footer>

</body>

</html>