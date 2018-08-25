<?php

require_once ('domas_budrys_database.php');

if(!isset ($studentID)){
    $studentID = filter_input(INPUT_GET, 'studentID', FILTER_VALIDATE_INT);
    
    if ($studentID == NULL || $studentID == false){
        $studentID = 1;
    }//end of IF
}//end of IF isset



//echo $studentID;
$queryStudent = 'SELECT * FROM student';

//get name 
$statement1 = $db ->prepare ($queryStudent);
$statement1 -> bindValue (':studentID', $studentID);
$statement1 -> execute();
$name = $statement1->fetchAll();
$statement1->closeCursor();

/*

foreach($name as $n )
{
    echo $n ['studentID'] . ";";
    echo $n ['name'] . ";";
    echo $n ['email'] . "<br>";
}

*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Domas Budrys Kung Fu School - Students</title>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">

</head>

<header>
    <h1>Domas Budrys Kung Fu School - Students</h1>
</header>

<body>
    <h1>Student List</h1>
    
    <table cellpadding="0" cellspacing="0" style="width: 100%">
        
        <!-- Header of the table-->
        <tr>
			  <th>Student ID</th>
			  <th>Name</th>
			  <th>Email</th>
			  
		</tr>
        
        <?php
        foreach ($name as $n )
        {
        ?>
        
        <tr>
            <td style="text-align: center"> <?php echo $n['studentID']; ?></td>
            <td> <?php echo $n['name']; ?></td>
            <td> <?php echo $n['email']; ?></td>
            <td>
                <form style="text-align: center"
                      action="domas_budrys_delete_student.php" method="post" id="delete_student_form">
                    <input type ="hidden" name="studentID"
                           value= "<?php echo $n ['studentID']; ?>">
                    <input type="submit" value="Delete">
                    
                </form>
            </td>
            
            
        </tr>
        
        <?php 
            }
            ?>

        
    </table>


    
    <br>
    
    <a href="domas_budrys_add_student_form.php">Add Student</a>
    
    <br>
    <br>
 
</body>

<footer>
    <br>
    &#169; <?php echo date("Y"); ?> Domas  Budrys Kung Fu School
</footer>

</html>