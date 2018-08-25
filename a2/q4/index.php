 <!-- Assignment 2  Question 4   Domas Budrys CSCI - 4000-->  

<?php
//set default value for variables
if(!isset($word)){
 $word= '';
 
}


?>


<!DOCTYPE html>     


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Kungfu Panda Po Secret Scroll </title>
     
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Kungfu Panda Po Secret Scroll </h1>
        <br>
    </header>
    
    
    <main>
  
     
        
        <h2> Click on the button below to enter Po's secret word for secret scroll</h2>
        
        <br>
        
        <p>The secret word must contain 9 characters, and must contain at least one @ sign.</p>
        <form method="get" action ="index_process.php">
         
       
          
                <label> Po's Secret word:</label>
                <input type ="text" name="word" value="<?php echo htmlspecialchars ($word);?>">
                <br>
            
         
         <br>
         
                <input class="button" type="submit" value="submit">
                
                
            <p>The secret word must contain 9 characters, and must contain at least one @ sign.</p>
                
 
          
          <!--Display error message -->
           <?php if(!empty ($error_message)) { ?>
           <p class="error"> <?php echo htmlspecialchars($error_message); ?> </p>
           <?php } ?>
         
        </form>
        
        
    </main>

  </div>

</body>
</html>
