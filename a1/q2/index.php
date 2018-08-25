 <!-- Assignment 1  Question 2   Domas Budrys CSCI - 4000-->


<?php

//set default value for variables
if (!isset($moviePrice)) {
$moviePrice ='';
}



?>

<!DOCTYPE html>


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Movie Ticket</title>

     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys Movie Ticket</h1>
        <br>
    </header>






    <main>
        <p>This page will decide the cost of Domas' movie ticket price based on his age.</p>

        <ul>

          <li> Under age 4 (age &lt; 4) cost is $3.00 </li>
          <li> Between ages 4 and 16 (4 &ge; age &le; 16) ocst is $7.00 </li>
          <li> Older than 16 age (age &gt; 16) cost is $9.00 </li>

        </ul>

        <h2> Please enter Domas' age</h2>


        <form method="get" action ="index_process.php">



                <input type ="text" name="moviePrice" value="<?php echo htmlspecialchars ($moviePrice);?>">
                <label> years old</label>

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
