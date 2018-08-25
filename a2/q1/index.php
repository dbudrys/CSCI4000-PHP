 <!-- Assignment 2  Question 1   Domas Budrys CSCI - 4000-->  


<?php

//set default value for variables
if (!isset($rate)) {
$rate ='';
}

if (!isset($hours)) {
$hours ='';
}

if (!isset($dependents)) {
$dependents ='';
}


?>

<!DOCTYPE html>     


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Employee Net Pay</title>
     
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Employee Net Pay</h1>
        <br>
    </header>
    
    
   
    
    
    
    <main>
        <p>This page will prompt Domas Budrys to calculate an employee's net pay.</p>
      
        <p>Please enter: </p>
        
        <ul>
            
            <li>Employee's hourly rate of pay;</li>
            <li>Number of hours worked that week;</li>
            <li>Number of dependets employee has.</li>
            
        </ul>
     
        
        <h2> Please enter:</h2>
        
        <br>
        
        
        <form method="get" action ="index_process.php">
         
       
          
                <label style="padding-right: 170px;"> Employee's hourly rate of pay:</label>
                <input type ="text" name="rate" value="<?php echo htmlspecialchars ($rate);?>">
                <br>
            
         
         <br>
         
          
          
                <label style="padding-right: 131px;"> Number of hours worked that week:</label>
                <input type ="text" name="hours" value="<?php echo htmlspecialchars ($hours);?>">
                <br>
            
          
          <br>
          
    
          
                <label style="padding-right: 123px;"> Number of dependets employee has:</label>
                <input type ="text" name="dependents" value="<?php echo htmlspecialchars ($dependents);?>">
                <br>
                <br>
            
           
           
           
          
         
         
                <input style="margin-left: 385px;" class="button" type="submit" value="Submit">
                
     
          <!--Display error message -->
           <?php if(!empty ($error_message)) { ?>
           <p class="error"> <?php echo htmlspecialchars($error_message); ?> </p>
           <?php } ?>
            
      
         
        </form>
        
        
    </main>

  </div>

</body>
</html>
