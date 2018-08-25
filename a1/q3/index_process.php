 <!-- Assignment 1  Question 3 PROCESS  Domas Budrys CSCI - 4000-->


<?php

    $powerLevel= filter_input (INPUT_POST,'power', FILTER_VALIDATE_FLOAT);

    $powerMetric  = '';



//$moviePrice error_message

if (empty($powerLevel))
{
    $error_message= 'Power field can not be empty';
}

else if ($powerLevel == FALSE){
    $error_message = 'Power field must be a number';
}


else {
    $error_message ='';
}


// Display power level and add text after


 if($powerLevel < 0)
 {
	 $powerMetric = "po eats too much noodle";
 }
 else if($powerLevel >= 0 && $powerLevel <= 200)
 {
	 $powerMetric = "Po reaches the training hall";
 }
 else if($powerLevel >= 201 && $powerLevel <= 400)
 {
	 $powerMetric = "Po reaches the student barracks";
 }
 else if($powerLevel >= 401 && $powerLevel <= 600)
 {
	 $powerMetric = "Po reaches the Peach tree of Heavenly Wisdom";
 }
 else if($powerLevel >= 601 && $powerLevel <= 800)
 {
	 $powerMetric = "Po climbs the Wu Da Mountains";
 }
 else if($powerLevel >= 801 && $powerLevel <= 1000)
 {
	 $powerMetric = "Po trians at the pool of Sacred Tears";
 }
 else if($powerLevel > 1000)
 {
	 $powerMetric = "Po defeats Tai Lung";
 }



// if error message exists go to index.php page
if($error_message != '') {
    include ('index.php');
    exit();
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
         <p>This page will prompt Domas Budrys' for Kung Fu Panda Po's power level (in number).
         The program will convert the given input into Po's power metric</p>

         <p>
          less than 0: Po eats too much noodle
          <br>
          0 to 200: Po reaches the training hall
          <br>
          201 to 400: Po reaches the student barracks
          <br>
          401 to 600: Po reaches the Peach tree of Heavenly Wisdom
          <br>
          601 to 800: Po climbs the Wu Da Mountains
          <br>
          801 to 1000: Po trians at the pool of Sacred Tears
          <br>
          Greater than 1000: Po defeats Tai Lung
          <br>
         </p>

                <span> <b> <?php
                        echo "Po's power level is ".$powerLevel . "<br> ". $powerMetric;
                        ?>
                </b> </span>

                <br>
                <br>



         <a href="index.php">back to frist page</a>








    </main>

  </div>

</body>
</html>
