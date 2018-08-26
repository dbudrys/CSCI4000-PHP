<!-- Domas Budrys Assignmnet 5.  04/05/2017        Question 3 -->

<?php include '../view/domas_budrys_header.php'; ?>

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
	
    <a href="domas_budrys_add_student_form.php">Add Student</a>
	
	<br>
	<br>
	
	
	<!-- <a href="domas_budrys_major_list.php">List / Add Student</a> -->
  
	</section>
	
</main>

<?php include '../view/domas_budrys_footer.php'; ?>

