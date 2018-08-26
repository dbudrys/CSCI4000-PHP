<!-- Domas Budrys Assignmnet 5.  04/05/2017        Question 2 -->

<?php


function get_student_by_major($majorID){
    
    global $db;
    
    $query = 'SELECT * FROM STUDENT
                WHERE STUDENT.majorID = :majorID
                ORDER BY studentID';
                
    $statement = $db ->prepare($query);
    $statement -> bindValue (":majorID", $majorID);
    $statement -> execute();
    $students = $statement ->fetchAll();
    $statement -> closeCursor();
    
    
    return $students;
    
}// end of get_student_by_major()


?>