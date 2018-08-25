 <!-- Assignment 1  Question 1 PROCESS  Domas Budrys CSCI - 4000-->  


<?php
//Variable validation
    $nameMovie = filter_input (INPUT_POST, 'nameMovie');
    
    
    $directedBy = filter_input (INPUT_POST, 'directedBy');
    
    
    $releaseDate = filter_input (INPUT_POST, 'releaseDate');
    
    
    $budget = filter_input (INPUT_POST, 'budget', FILTER_VALIDATE_FLOAT);
    $budget_f = number_format($budget, 2);
    
    $boxOffice = filter_input (INPUT_POST, 'boxOffice', FILTER_VALIDATE_FLOAT);
    $boxOffice_f= number_format($boxOffice, 2);
   
    
    
    
    


//Set error_message for variables

if (empty($nameMovie))
{
    $error_message= 'Movie name can not be empty';
}

else if ($budget == FALSE){
    $error_message = 'Budget must be number';
}

else if ($budget <= 0){
    $error_message = 'Budget Number must be more than zero';
}

else if ($boxOffice == FALSE){
    $error_message = 'Box Office must be number';
}

else if ($boxOffice <= 0){
    $error_message = 'Box Office Number must be more than zero';
}

else {
    $error_message ='';
}



// if error message exists got to index.php page
if($error_message != '') {
    include ('index.php');
    exit();
}


//calculate profit and format
$profit = $boxOffice - $budget;
$profit_f = '$'.number_format($profit, 2);


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
        <h3>This page will prompt Domas Budrys for information on his favorite movie</h3>
        
       
        
     <ul>
        
               
                    <li>
                <label style="padding-right: 170px;"> Movie Name: </label>
                <span> <?php
                        echo $nameMovie;      
                        ?>
                </span>
                 </li>
               
                
              
                <li>
                <label style="padding-right: 175px;"> Directed By:  </label>
                <span> <?php
                        echo $directedBy;      
                        ?>
                </span>
                </li>
                
                
                <li>
                <label style="padding-right: 163px;"> Release Date:</label>
                <span> <?php
                        echo $releaseDate;     
                        ?>
                </span>
                </li>
                
                
                <li>
                <label style="padding-right: 100px;"> Budget (US$, million):</label>
                <span> <?php
                        echo $budget_f;      
                        ?>
                </span>
                </li>
                
                
                <li>
                <label style="padding-right: 76px;"> Box Office (US$, million):</label>
                <span> <?php
                        echo $boxOffice_f;      
                        ?>
                </span>
                </li>
                
             
                <li>
                <label style="padding-right: 112px;"> Profit (US$, million):</label>
                <span> <?php
                        echo '$'. $boxOffice_f. ' - $'. $budget_f.' = '.$profit_f .' million';      
                        ?>
                </span>
                </li>
         
         </ul>
     
     
         <a href="index.php">back to frist page</a> 
        
        
     
         
         

        
        
    </main>

  </div>

</body>
</html>
