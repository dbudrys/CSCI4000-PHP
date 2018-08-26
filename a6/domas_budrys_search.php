<!-- Domas Budrys Assignmnet 6.  04/21/2017       Question 3 -->

<?php
    
    require_once ('domas_budrys_database.php');
    
    //gets number from index.html
    $GPA = filter_input(INPUT_GET, 'GPA');
    
    //echo $GPA . "geeeee";
    
    
    //this will fetch all the values from database
    $query = "SELECT * FROM STUDENT
              WHERE GPA >= :GPA ";
              
    $statement = $db->prepare($query);
    $statement -> bindValue ('GPA', $GPA);
    $statement -> execute();
    $student = $statement->fetchAll();
    
?>


<table cellpadding="0" style="width: auto;">
   <tr>
	  <td>Student ID</td>
	  <td>Name</td>
      <td>Email</td>
      
	  <td>GPA</td>
   </tr>
   <?php 
   foreach ($student as $s)
	{
   ?>
   <tr>
     <td style="width: 160px"><?php echo $s['studentID'];?></td>
	  <td style="width: 200px; text-align: right;"><?php echo $s['name'];?></td>
	  <td style="width: 290px; text-align: right;"><?php echo $s['email'];?></td>
	  <td><?php echo $s['GPA'];?></td>
   </tr>
   <?php 
   }
   ?>
</table>
