 <!-- Assignment 1  Question 3   Domas Budrys CSCI - 4000-->


<?php

//set default value for variables
if (!isset($power)) {
$power ='';
}



?>

<!DOCTYPE html>


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Kung Fu Panda Po Power Level</title>

     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Kung Fu Panda Po Power Level</h1>
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

       



        <form method="POST" action ="index_process.php">


                <label> Po's power lever</label>
                <input type ="text" name="power" value="<?php echo htmlspecialchars ($power);?>">


                <br>
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
