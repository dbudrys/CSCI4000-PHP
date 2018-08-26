<!-- Domas Budrys Assignmnet 5.  04/05/2017        Question 4 -->

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




function delete_student($studentID){
    
    global $db;
    
    $query = 'DELETE FROM STUDENT
                WHERE studentID = :studentID';
    $statement = $db-> prepare($query);
    $statement -> bindValue(':studentID', $studentID);
    $statement -> execute();
    $statement ->closeCursor();
    
    
}//end of delete_student





?>