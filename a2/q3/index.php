 <!-- Assignment 2  Question 3   Domas Budrys CSCI - 4000-->  


<?php

//set default value for variables
if (!isset($row)) {
$row='';
}

if (!isset($column)) {
$column ='';
}



?>

<!DOCTYPE html>     


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Kungfu Panda Po Magic Rectangle </title>
     
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Kungfu Panda Po Magic Rectangle </h1>
        <br>
    </header>
    
    
    <main>
  
     
        
        <h2> Enter Po's row and column numbers</h2>
        
        <br>
        
        
        <form method="post" action ="index_process.php">
         
       
          
                <label style="padding-right: 80px;"> Po's row:</label>
                <input type ="text" name="row" value="<?php echo htmlspecialchars ($row);?>">
                <br>
            
         
         <br>
         
          
          
                <label style="padding-right: 58px;"> Po's column</label>
                <input type ="text" name="column" value="<?php echo htmlspecialchars ($column);?>">
                <br>
            
          
          <br>
          
                <input type="submit" value="generate Po's magic rectangle">
               
                <h3> Po's Magic Rectangle:</h3>
                
     
          <!--Display error message -->
           <?php if(!empty ($error_message)) { ?>
           <p class="error"> <?php echo htmlspecialchars($error_message); ?> </p>
           <?php } ?>
          
         
        </form>
        
        
    </main>

  </div>

</body>
</html>
