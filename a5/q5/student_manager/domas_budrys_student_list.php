<!-- Domas Budrys Assignmnet 5.  04/05/2017        Question 5 -->

<?php include '../view/domas_budrys_header.php';

	
?>

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
        foreach ($students as $s )
        {
        ?>
        
        <tr>
            <td style="text-align: center"> <?php echo $s['studentID']; ?></td>
            <td> <?php echo $s['firstName']; ?></td>
            <td> <?php echo $s['lastName']; ?></td>
			<td style="text-align: center"> <?php echo $s['gender']; ?></td>
            <td>
                <form style="text-align: center"
                      action="." method="post" id="delete_student_form">
					<input type="hidden" name="action" value="delete_student">
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
	
    <p><a href='domas_budrys_student_add.php' action="show_add_form" >Add Student</a></p>
	   
	
	<br>
	<br>
	
	
  
	</section>
	
</main>

<?php include '../view/domas_budrys_footer.php'; ?>

