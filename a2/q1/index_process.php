 <!-- Assignment 2  Question 1 PROCESS  Domas Budrys CSCI - 4000-->


<?php
//Variable validation
   // $nameMovie = filter_input (INPUT_POST, 'nameMovie');



    $rate = filter_input (INPUT_GET, 'rate', FILTER_VALIDATE_FLOAT);
    $rate_f = number_format($rate, 2);

    $hours_input = filter_input (INPUT_GET, 'hours', FILTER_VALIDATE_FLOAT);
    $hours =  $hours_input;

    $dependents = filter_input (INPUT_GET, 'dependents',FILTER_VALIDATE_FLOAT);




//Set error_message for variables
//$rate validation


if (empty($rate))
{
    $error_message= 'Hourly rate field can not be empty';
}



if ($rate == FALSE){
    $error_message = 'Hourly rate field must be number';
}

else if ($rate <= 0){
    $error_message = 'Hourly rate must be more than zero';
}



//$hours validation

else if (empty($hours))
{
    $error_message= 'Number of hours field can not be empty';
}



else if ($hours == FALSE){
    $error_message = 'Number of hours must be number';
}

else if ($hours <= 0){
    $error_message = 'Number of hours must be more than zero';
}



//$dependets validation
else if (empty($dependents))
{
    $error_message= 'Number of dependents field can not be empty';
}

else if ($dependents == FALSE){
    $error_message = 'Number of dependents must be number';
}

else if ($dependents <= 0){
    $error_message = 'Number of dependents must be more than zero';
}




else {
    $error_message ='';
}




// if error message exists got to index.php page
if($error_message != '') {
    include ('index.php');
    exit();
}


//declare overtime
$overtime = '';

if ($hours <= 45){
    $overtime = 0;
}

else if ($hours > 45){
    $overtime = $hours - 45;
}


//Declare $40hours
$hours45 = '';

if ($hours <= 45){
    $hours45 = $rate * $hours;
}

else if ($hours > 45) {
    $hours = 45;
    $hours45 = $rate * $hours;

}


//declare $payOver
$payOver =$rate * $overtime * 1.5;

//declare $gross
$gross = $hours45 + $payOver;


//declare tax and show
$taxRate ='';
$taxShow= '';

if($dependents == 0){
    $taxRate = 0.25;
    $taxShow = '25%';
}
else if ($dependents >= 1 && $dependents <= 3){
    $taxRate = 0.20;
    $taxShow = '20%';

}

else if ($dependents >= 4 && $dependents <= 6){
    $taxRate = 0.10;
    $taxShow = '10%';

}

else if ($dependents > 6){
    $taxRate = 0.05;
    $taxShow = '5%';

}

$finalTax = $gross * $taxRate;

$net = $gross - $finalTax;



?>

<!DOCTYPE html>


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Employee Net Pay</title>

     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Employee Net Pay</h1>
        <br>
    </header>


    <main>
        <p>This page will calculate an employee's net pay</p>


        <h3>You entered:</h3>



                <label style="padding-right: 170px;"> Employee's hourly rate of pay = </label>

                <span> <?php
                        echo '<b>$'.$rate_f . '</b> per hour';
                        ?>
                </span>


                <br>


                <label style="padding-right: 131px;"> Number of hours worked that week =  </label>

                <span> <?php
                        echo '<b>'.$hours_input. '</b> hours';
                        ?>
                </span>


                <br>


                <label style="padding-right: 122px;"> Number of dependets employee has =</label>
                <span> <?php
                        echo '<b>'. $dependents.  '</b> dependets';
                        ?>
                </span>

                <br>

                <label style="padding-right: 193px;"> Number of overtime hours =</label>
                <span> <?php
                        echo '<b>'. $hours_input. ' - 45 = '. $overtime . '</b> hours';
                        ?>
                </span>

                <br>


                <label style="padding-right: 250px;"> First 40 hours pay =</label>
                <span> <?php
                        echo '<b>$'. $rate. ' x '. $hours . ' = $' . $hours45 . '</b>';
                        ?>
                </span>

                <br>


                <label style="padding-right: 183px;"> Next <?php echo '<b>'.$overtime.'</b>'?> hours per (overtime) =</label>
                <span> <?php
                        echo '<b>$'. $rate. ' x '. $overtime . ' x 1.5 = $'. $payOver.'</b>';
                        ?>
                </span>

                <br>


                 <label style="padding-right: 303px;"> Gross Pay =</label>
                <span> <?php
                        echo '<b> $'. $hours45. ' + '. $payOver .' = $'. $gross .'</b>';
                        ?>
                </span>

                <br>


                <label style="padding-right: 205px;"> Tax rate for <?php echo '<b>'.$dependents.'</b>'?> dependets =</label>
                <span> <?php
                        echo '<b>'. $taxShow. '</b>';
                        ?>
                </span>

                <br>


                 <label style="padding-right: 280px;"> Tax deduction =</label>
                <span> <?php
                        echo '<b> $'.$gross. ' x '. $taxShow. ' = $'. $finalTax .'</b>';
                        ?>
                </span>

                <br>


                   <label style="padding-right: 322px;"> Net Pay =</label>
                <span> <?php
                        echo '<b> $'.$gross. ' - $'. $finalTax. ' = $'. $net .'</b>';
                        ?>
                </span>

                <br>


                   <label style="padding-right: 225px;"> This employee earned :</label>
                <span> <?php
                        echo '<b> $'. $net .'</b> this week.';

                        ?>
                </span>

                <br>
                <br>


         <a href="index.php">back to first page</a>








    </main>

  </div>

</body>
</html>
