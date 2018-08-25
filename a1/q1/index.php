 <!-- Assignment 1  Question 1   Domas Budrys CSCI - 4000-->  


<?php

//set default value for variables
if (!isset($nameMovie)) {
$nameMovie ='';
}

if (!isset($directedBy)) {
 $directedBy ='';
}

if (!isset($releaseDate)) {
 $releaseDate ='';
}

if (!isset($budget)) {
 $budget ='';
}

if (!isset($boxOffice)) {
 $boxOffice ='';
}

?>

<!DOCTYPE html>     


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Movie Page</title>
     
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys Favorite Movie</h1>
        <br>
    </header>
    
    
   
    
    
    
    <main>
        <p>This page will prompt Domas Budrys for information on his favorite movie</p>
        
        <h2> Click on the button bellow to enter new information</h2>
        
        
        <form method="post" action ="index_process.php">
         
       
          
                <label style="padding-right: 170px;"> Movie name:</label>
                <input type ="text" name="nameMovie" value="<?php echo htmlspecialchars ($nameMovie);?>">
                <br>
            
         
         <br>
         
          
          
                <label style="padding-right: 175px;"> Directed by:</label>
                <input type ="text" name="directedBy" value="<?php echo htmlspecialchars ($directedBy);?>">
                <br>
            
          
          <br>
          
    
          
                <label style="padding-right: 162px;"> Release Date:</label>
                <input type ="text" name="releaseDate" value="<?php echo htmlspecialchars ($releaseDate);?>">
                <br>
           
           
           <br>
           
          
                <label style="padding-right: 100px;"> Budget (US$, million):</label>
                <input  type ="text" name="budget"  value= "<?php echo htmlspecialchars ($budget);?>">
                <br>
  
            
            <br>
            
           
          
                <label style="padding-right: 76px;"> Box Office (US$, million):</label>
                <input type ="text" name="boxOffice"  value= "<?php echo htmlspecialchars ($boxOffice);?>">
                <br>
            
          
         
         
                <input class="button" type="submit" value="Submit">
                
     
          <!--Display error message -->
           <?php if(!empty ($error_message)) { ?>
           <p class="error"> <?php echo htmlspecialchars($error_message); ?> </p>
           <?php } ?>
            
          
         
                  
         
         
         
        </form>
        
        
    </main>

  </div>

</body>
</html>
