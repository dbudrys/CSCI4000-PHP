

<?php
  // Domas Budrys Assignmnet 6.  04/21/201777777       Question 4 
    require_once ('domas_budrys_database.php');
    
    
    //receives input from ajaxsearch_single.html
    $studentID = filter_input (INPUT_GET, 'studentID');
    //echo $studentID . 'hellow';
    
    $query = "SELECT * FROM STUDENT
             WHERE studentID = :studentID ";
                        
    $statement = $db->prepare($query);
    $statement -> bindValue ('studentID', $studentID);
    $statement -> execute();
    
    $student = $statement->fetchAll();
    
    
    
    
    foreach ($student as $s) :
    
    echo "|". $s['studentID'] . "|";
    echo $s['name'] . "|";
    echo $s['email'] . "|";
    echo $s['GPA'] . "|";
    
    endforeach;
    
    
    
  
             
    
?>

