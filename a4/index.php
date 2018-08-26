<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->

<?php

require_once ('domas_budrys_database.php');


// get studentID
if(!isset ($studentID)){
    $studentID = filter_input(INPUT_GET, 'studentID', FILTER_VALIDATE_INT);

    if ($studentID == NULL || $studentID == false){
        $studentID = 1;
    }//end of IF
}//end of IF isset

//get data from student table
	$firstName = filter_input(INPUT_GET, 'firstName');
	$lastName = filter_input(INPUT_GET, 'lastName');
	$gender = filter_input(INPUT_GET, 'gender');





	// get majorID
if(!isset ($majorID)){
    $majorID = filter_input(INPUT_GET, 'majorID', FILTER_VALIDATE_INT);

    if ($majorID == NULL || $majorID == false){
        $majorID = 1;
    }//end of IF
}//end of IF isset



	$queryMajor = 'SELECT *
			       FROM MAJOR
				   WHERE majorID = :majorID';
	$statement = $db->prepare($queryMajor);
	$statement -> bindValue (':majorID', $majorID);
	$statement -> execute();
	$major = $statement->fetch();
	$major_name = $major['majorName'];
	$statement->closeCursor();
	//echo $major_name;


$majorName = filter_input(INPUT_GET, 'majorName');
//get all majors
$queryAllMajors = 'SELECT *
				   FROM MAJOR';
$statement2 = $db->prepare($queryAllMajors);
$statement2 ->bindValue(':majorName', $majorName);
$statement2->execute();
$majors = $statement2->fetchAll();
$statement2->closeCursor();

/*
foreach ($majors as $m)
{
	echo $m['majorName']. '<br> b';

}
*/



//get data if major is computer science
if ($majorID == 1) {

$queryStudent = "SELECT studentID, firstName, lastName, gender
				FROM STUDENT
				 WHERE majorID = 1" ;

$statement1 = $db ->prepare ($queryStudent);
$statement1 -> bindValue (':studentID', $studentID);
$statement1 -> bindValue (':firstName', $firstName);
$statement1 -> bindValue (':lastName', $lastName);
$statement1 -> bindValue (':gender', $gender);

$statement1 -> execute();
$student = $statement1->fetchAll();
$statement1->closeCursor();

}

//get data if major is electrical engineering
else if ($majorID == 2) {

$queryStudent = "SELECT studentID, firstName, lastName, gender
				FROM STUDENT
				 WHERE majorID = 2" ;

$statement1 = $db ->prepare ($queryStudent);
$statement1 -> bindValue (':studentID', $studentID);
$statement1 -> bindValue (':firstName', $firstName);
$statement1 -> bindValue (':lastName', $lastName);
$statement1 -> bindValue (':gender', $gender);

$statement1 -> execute();
$student = $statement1->fetchAll();
$statement1->closeCursor();

}

//get data if major is business
else if ($majorID== 3) {

$queryStudent = "SELECT studentID, firstName, lastName, gender
				FROM STUDENT
				 WHERE majorID = 3" ;

$statement1 = $db ->prepare ($queryStudent);
$statement1 -> bindValue (':studentID', $studentID);
$statement1 -> bindValue (':firstName', $firstName);
$statement1 -> bindValue (':lastName', $lastName);
$statement1 -> bindValue (':gender', $gender);

$statement1 -> execute();
$student = $statement1->fetchAll();
$statement1->closeCursor();

}

/*
foreach($student as $s )
{
    echo $s [':studentID'] . ";";
    echo $s [':firstName'] . ";";
    echo $s [':lastName'] . ";";
	echo $s [':gender'] . "<br>";
}
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

<header>
    <h1>Domas Budrys Kung Fu School - Students</h1>
</header>

<main>

    <h1>Student List</h1>

	<aside>
	<h2> Majors</h2>

	<nav>

		<ul>
			<?php foreach ($majors as $m ) { ?>
			<li> <a href="?majorID=
			<?php  echo $m ['majorID'] ; ?>" > <?php  echo $m['majorName']. '<br>'; ?></a>
			</li>
			<?php };?>
		</ul>

</nav>
	</aside>

	<section>
	<h2><?php echo $major_name; ?></h2>
    <table cellpadding="0" cellspacing="0" style="width: 100%">

        <!-- Header of the table-->
        <tr>
			  <th>Student ID</th>
			  <th>First <br> Name </th>
			  <th>First <br> Name</th>
			  <th>Gender </th>

		</tr>

        <?php
        foreach ($student as $s )
        {
        ?>

        <tr>
            <td style="text-align: center"> <?php echo $s['studentID']; ?></td>
            <td> <?php echo $s['firstName']; ?></td>
            <td> <?php echo $s['lastName']; ?></td>
			<td style="text-align: center"> <?php echo $s['gender']; ?></td>
            <td>
                <form style="text-align: center"
                      action="domas_budrys_delete_student.php" method="post" id="delete_student_form">
                    <input type ="hidden" name="studentID"
                           value= "<?php echo $s ['studentID']; ?>">
                    <input type="submit" value="Delete">

                </form>
            </td>


        </tr>

        <?php
            }
            ?>


    </table>


    <br>
	<br>

    <a href="domas_budrys_add_student_form.php">Add Student</a>

	<br>
	<br>

	<a href="domas_budrys_major_list.php">List / Add Major</a>

	</section>

</main>


<footer>
    <br>
    &#169; <?php echo date("Y"); ?> Domas  Budrys Kung Fu School
</footer>


</body>

</html>
