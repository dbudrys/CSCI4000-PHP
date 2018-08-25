 <!-- Assignment 2  Question 4 PROCESS  Domas Budrys CSCI - 4000-->  


<?php
//Variable validation
 

    $word = filter_input (INPUT_GET, 'word');
 

//Set error_message for variables

//$row validation


if (empty($word))
{
    $error_message= 'Field cannot be empty';
}
else {
    $error_message ='';
}

// if error message exists got to index.php page
if($error_message != '') {
    include ('index.php');
    exit();
}



$message1 =''; 
$message2='';
$message3 ='';

$long = strlen($word) ;



if (strlen($word) != 9){
    
    $message1 = '"'.$word.'" does not contain extactly 9 characters';
    $message3 = 'You cannot open the secret scroll. Please try again';
}

if (strpos($word, '@') == false){
    $message2='"'.$word.'" does not contain any @sign';
    $message3 = 'You cannot open the secret scroll. Please try again';
}

if (strpos($word, '@') == true){
    $message2='';
}


 if (strlen($word) == 9){
    $message1 =''; 
}



if (strpos($word, '@') == true && strlen($word) == 9 ){
    $message1 = '"'.$word.'" contains exactly 9 character and there is at least
    one @ sign <br> Good Job! You can open the secret scrool';
    
}





?>

<!DOCTYPE html>     


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Kungfu Panda Po Secret Scroll</title>
     
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Kungfu Panda Po Secret Scroll</h1>
        <br>
    </header>
    
    
    <main>
        
        <h2>Po's Guess:</h2>
        
        <h2>You entered <?php echo $word; ?>  </h2>
        
     <label>  <?php  echo $message1; ?></label><br>
     <label>  <?php  echo $message2; ?></label><br>
     <label>  <?php  echo $message3; ?></label>
     
   
            
            <br>
               

         <a href="index.php">back to first page</a> 
        
       
    </main>

  </div>

</body>
</html>
