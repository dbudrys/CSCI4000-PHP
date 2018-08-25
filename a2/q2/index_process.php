 <!-- Assignment 2  Question 2 PROCESS  Domas Budrys CSCI - 4000-->  


<?php
//Variable validation
    $sequence1 = filter_input (INPUT_POST, 'sequence1');
    
    $sequence2 = filter_input (INPUT_POST, 'sequence2');
    
    $sequence3 = filter_input (INPUT_POST, 'sequence3');
    
    $sequence4 = filter_input (INPUT_POST, 'sequence4');
    
    $number = '';
    
    
    if (isset($sequence1)){
        $number = 1;
    }
    
    else if (isset($sequence2)){
        $number = 2;
    }
    
     else if (isset($sequence3)){
        $number = 3;
    }
    
    
     else if (isset($sequence4)){
        $number = 4;
    }
    
    
    //Declare fisrt function for sequence1
    function first(){
        
        $text='';
        
        for ($n = 1; $n < 10; $n++){
        
        $n1 = 2*$n;
        $nFinal = 10 - $n1;
        $text = 'When n='.$n.'; &nbsp; &nbsp; 10-2n = 10-2x'.$n. ' = 10-'.$n1. ' = '. $nFinal .'<br>';
        echo $text;
        }//end for loop
        
    }// end of first
    
    function second(){
        $text='';
        
        for ($n = 1; $n < 10; $n++){
            
            $n1 = 4*$n;
            $nFinal = $n1 + 3;
            
            $text = 'When n='. $n . '; &nbsp; &nbsp; 4n+3 = 4x'.$n. '+3 = '. $n1 . '+3 = ' .$nFinal. '<br>';
            
            echo $text;
            
            
        }//end for loop
        
    }//end of second
    
    
    function third(){
        
          $text='';
        
        for ($n = 1; $n < 10; $n++){
            
            $n1 = $n * $n;
            $nFinal = $n1 -2;
            
            $text ='When n='. $n . '; &nbsp; &nbsp; n*n-2 = '.$n.'x'.$n.'-2 = '.$n1.'-2 = ' . $nFinal . '<br>';
            
            echo $text;
            
        }//end for loop 
        
    }//end of third funciton
    
    
    
     function fourth(){
        
          $text='';
          
        
        for ($n = 1; $n < 10; $n++){
            
         $n1 = pow(2, $n);
         $n2 = $n1 / 2 ;
         $n3 = $n2 *3;
         $nFinal = 3 * $n1;
         
            
            $text ='When n='. $n . '; &nbsp; &nbsp;'. $n3. 'x2 = '.$nFinal.'<br>';
            echo $text;
            
        }//end for loop
     }
   


?>

<!DOCTYPE html>     


<html lang= "en-us">
<head>
    <meta charset= "utf-8">
     <title>Domas Budrys' Kungfu Panda Po Sequence</title>
     
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="page-wrap">
    <header>
     <h1>Domas Budrys' Kungfu Panda Po Sequence</h1>
        <br>
    </header>
    
    
    <main>
        <h3>You pressed button <?php echo $number; ?></h3>
        
        
        <h3>Po's sequence:</h3>
     
               
                <span>
                    <?php
                    if (isset($sequence1)){
                        first();
                    }
                    
                    else if (isset($sequence2)){
                        second();
                    }
                    
                     else if (isset($sequence3)){
                        third();
                    }
                    
                     else if (isset($sequence4)){
                        fourth();
                    }
                    
                    ?>
                    
                </span>
               

                <br>
                <br>


         <a href="index.php">back to frist page</a> 
        
        
     
         
         

        
        
    </main>

  </div>

</body>
</html>
