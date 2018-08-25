 <!-- Assignment 2  Question 3 PROCESS  Domas Budrys CSCI - 4000-->


<?php
//Variable validation


    $row = filter_input (INPUT_POST, 'row', FILTER_VALIDATE_FLOAT);


    $column = filter_input (INPUT_POST, 'column', FILTER_VALIDATE_FLOAT);





//Set error_message for variables

//$row validation


if (empty($row))
{
    $error_message= 'Row field cannot be empty';
}



else if ($row == FALSE){
    $error_message = 'Row field must be a number';
}

else if ($row <= 0){
    $error_message = 'Row field must be more than zero';
}



//$hours validation

else if (empty($column))
{
    $error_message= 'Column field can not be empty';
}



else if ($column == FALSE){
    $error_message = 'Column field must be number';
}

else if ($column <= 0){
    $error_message = 'Column field must be more than zero';
}

else {
    $error_message ='';
}


// if error message exists got to index.php page
if($error_message != '') {
    include ('index.php');
    exit();
}

// forLOOP*************************************************************

function forLoop(){

     global $row, $column;

     for($i =1; $i<= $row; $i++)
     {
       for($k =1; $k <= $column; $k++)
       {
         $x = $i + $k;
         echo "$i+$k=$x; ";
       }
      echo "<br>\n";
     }

}// end of forLoop

// whileLOOP*************************************************************

function whileLoop(){
  global $row, $column;

  $recRow = 1;
     while($recRow <= $row)
     {
       $recCol=1;
       while($recCol <= $column)
       {

         echo"(XY)";
         $recCol++;
       }
       echo "<br>\n";
       $recRow++;
     }

}//end of whileLoop



// doLOOP*************************************************************


function doLoop() {
    global $row, $column;

    $num1=1;

    do
    {
      $num2= 1;

        do
        {
          echo "loc(r$num1,c$num2); ";
          $num2++;
        }
        while ($num2 <=$column);
          echo"<br>\n";
          $num1++;
    }
        while($num1<=$row);
}//end doLoop



?>

<!DOCTYPE html>


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Kungfu Panda Po Magic Rectangle</title>

     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Kungfu Panda Po Magic Rectangle</h1>
        <br>
    </header>


    <main>

        <h3>Po's Magic Rectangle:</h3>

        <h3>Po's magic rectangle has <?php echo $row; ?> rows, and  <?php echo $column; ?> columns. </h3>

                <label> Nested while loop rectangle </label>
                <br>

                <span> <?php
                        whileLoop();
                        ?>
                </span>


                <br>

                  <label> Nested do..while loop rectangle </label>
                <br>

                <span> <?php
                        doLoop();
                        ?>
                </span>


                <br>

                <label> Nested for loop rectangle </label>
                <br>

                <span> <?php
                         forLoop();
                        ?>
                </span>



            <br>


         <a href="index.php">back to first page</a>


    </main>

  </div>

</body>
</html>
