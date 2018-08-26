<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->

<?php
require_once('domas_budrys_database.php');
//get all studnets
$queryStudent = 'SELECT *
          FROM STUDENT
          ORDER BY studentID';
$statement = $db->prepare($queryStudent);
$statement->execute();
$students = $statement->fetchAll();
$statement->closeCursor();


$queryMajor = 'SELECT *
          FROM MAJOR
          ORDER BY majorID';
$statement1 = $db->prepare($queryMajor);
$statement1->execute();
$major = $statement1->fetchAll();
$statement1->closeCursor();

/*

foreach ($major as $m) :
echo $m ['majorID'];
echo '<br>';
echo $m ['majorName'];
echo '<br>';

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
	<header><h1> Domas Budrys Kung Fu School - Add Student</h1></header>
	
	<main>
		<h1>Add Student </h1>
		<form method="post" action="domas_budrys_add_student.php" id="add_student_form">
			<label>Major: </label>
			<select name="majorID" style="margin-left: 58px;">
				<?php foreach ($major as $m) : ?>
						<option value="<?php  echo $m['majorID'];?>">  <?php  echo $m['majorName'];?></option>
				<?php endforeach; ?>
			</select>
			<br>
			<label>First Name: </label>
			<input name="firstName"  type="text"  style="margin-left: 19px; text-transform:uppercase;" >
			<br>
			<label>Last Name: </label>
			<input name="lastName"  type="text"   style="margin-left: 20px; text-transform:uppercase;">
			<br>
			<label>Gender: </label>
			<select name='gender'  style="margin-left: 45px;">
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
			
			
			<br>
			<label>&nbsp;</label>
			<input type="submit" value="Add Student" style="margin-left: 98px;">
		</form>
		<p><a href="index.php">View All Students</a></p>
	</main>
	
	<footer>
		
	    <br>
		&#169; <?php echo date("Y"); ?> Domas  Budrys Kung Fu School
		</p>
	</footer>

</body>

</html>