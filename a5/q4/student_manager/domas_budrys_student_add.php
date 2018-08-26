<!-- Domas Budrys Assignmnet 5.  04/05/2017     Question 4 -->

<?php

include '../view/domas_budrys_header.php';

/**************************************
 *Based on the example provided by Professor Lee I was not able to access get_majors() function
 * In my case, inlcude statement was not working in IF ($action == 'show_add_form')
 * to access files was seem to be the only working solution at this time
 * *************************************/
		require ('../model/domas_budrys_database.php');
		require ('../model/domas_budrys_major_db.php');
		
		$majors = get_majors();

?>



<main>
		<h1>Add Student </h1>
		<form  action="index.php" method="post"  id="add_student_form">
            
        <input type="hidden" name="action" value="add_student">
		
        
   
			<label>Major: </label>
			<select name="majorID" style="margin-left: 58px;">
				<?php foreach ($majors as $m) : ?>
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
		<p><a href="index.php?action=list_students">View All Students</a></p>
	</main>


<?php

include '../view/domas_budrys_footer.php';

?>