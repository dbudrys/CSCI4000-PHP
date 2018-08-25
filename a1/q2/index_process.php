 <!-- Assignment 1  Question 2 PROCESS  Domas Budrys CSCI - 4000-->


<?php
//$moviePrice validation
    $moviePrice = filter_input (INPUT_GET,'moviePrice', FILTER_VALIDATE_FLOAT);

    $message = '';





// Display and set error_message
if (empty($moviePrice))
{
    $error_message= 'Field can not be empty';
}

else if ($moviePrice == FALSE){
    $error_message = 'Age must be a number';
}

else if ($moviePrice <= 0){
    $error_message = 'Age must be must be more than zero';
}

else {
    $error_message ='';
}


// Display $moviePrice level and add text after
if ($moviePrice < 4) {

    $message = 'Domas is '. $moviePrice. " years old, and the cost of Domas' ticket is $3.00";


}

else if ($moviePrice >= 4 && $moviePrice <= 16) {

    $message = 'Domas is '. $moviePrice. " years old, and the cost of Domas' ticket is $7.00";


}

else if ($moviePrice > 16) {

    $message = 'Domas is '. $moviePrice. " years old, and the cost of Domas' ticket is $9.00";


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
        <p>This page will decide the cost of Domas' movie ticket price based on his age.</p>

        <ul>

          <li> Under age 4 (age &lt; 4) cost is $3.00 </li>
          <li> Between ages 4 and 16 (4 &ge; age &le; 16) ocst is $7.00 </li>
          <li> Older than 16 age (age &gt; 16) cost is $9.00 </li>

        </ul>


                <span> <b> <?php
                        echo $message;
                        ?>
                </b> </span>

                <br>
                <br>



         <a href="index.php">back to frist page</a>








    </main>

  </div>

</body>
</html>
