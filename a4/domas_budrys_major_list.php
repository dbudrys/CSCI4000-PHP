<!-- Domas Budrys Assignmnet 4.  03/19/2017 -->

<?php

require_once ('domas_budrys_database.php');

	
	
	

	// get majorID
if(!isset ($majorID)){
    $majorID = filter_input(INPUT_GET, 'majorID', FILTER_VALIDATE_INT);
    
    if ($majorID == NULL || $majorID == false){
        $majorID = 1;
    }//end of IF
}//end of IF isset
	

	

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
	echo $m['majorName']. '<br> ';
	
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
    <h1>Domas Budrys Kung Fu School - Majors</h1>
</header>

<main>

    <h2>Student List</h2>
	
	
    
	<section>
	
    <table cellpadding="0" cellspacing="0" style="width: 100%">
        
        <!-- Header of the table-->
        <tr>
			  <th>Major Name</th>
			  
		</tr>
        
        <?php
        foreach ($majors as $m )
        {
        ?>
        
        <tr>
            <td style="text-align: center"> <?php echo $m['majorName']; ?></td>
            
            <td>
                <form style="text-align: center"
                      action="domas_budrys_delete_major.php" method="post" id="delete_student_form">
                    <input type ="hidden" name="majorID"
                           value= "<?php echo $m ['majorID']; ?>">
                    <input type="submit" value="Delete">
                    
                </form>
            </td>
            
            
        </tr>
        
        <?php 
            }
            ?>

    </table>


    <br>
	<h2> Add Major</h2>
	<form method = "post" action= "domas_budrys_add_major.php" id="add_major">
		<label>Major Name: </label>
		<input name = "majorName" type = "text" style="margin-left: 19px;">
		
		<input type="submit" value="Add " style="margin-left: 10px;">
	</form>
	
	<br>
	
    
	
	<br>
	<br>
	
	<a href="index.php">List Students</a>
  
	</section>
	
</main>


<footer>
    <br>
    &#169; <?php echo date("Y"); ?> Domas  Budrys Kung Fu School
</footer>

 
</body>

</html>