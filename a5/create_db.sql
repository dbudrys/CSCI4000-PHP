
DROP DATABASE IF EXISTS domas_budrys_student_db;
CREATE DATABASE domas_budrys_student_db;
USE domas_budrys_student_db; 


CREATE TABLE MAJOR (
  majorID       INT(11)        NOT NULL AUTO_INCREMENT,
  majorName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (majorID)
);


CREATE TABLE STUDENT (
  studentID     INT(11)        NOT NULL AUTO_INCREMENT,
  majorID       INT(11)        NOT NULL,
  firstName     VARCHAR(255)   NOT NULL,
  lastName      VARCHAR(255)   NOT NULL,
  gender        CHAR(1)        NOT NULL,
  
  PRIMARY KEY (studentID),
  FOREIGN KEY (majorID)     REFERENCES MAJOR(majorID)
);


INSERT INTO MAJOR (majorName)
VALUES
('Computer Science'),
('Electrical Engineering'),
('Business');


INSERT INTO STUDENT (majorID, firstName, lastName, gender)
VALUES
(1, 'PO', 'BLACK', 'M'),
(1, 'SHIFU', 'HOFFMAN', 'M'),
(1, 'TIGRESS', 'JOLIE', 'F'),
(1, 'JENNIFER', 'YUH', 'F'),
(2, 'MONKEY', 'CHAN', 'M'),
(2, 'MANTIS', 'ROGEN', 'M'), 
(3, 'CRANE', 'CROSS', 'M'),
(3, 'OOGWAY', 'KIM', 'M'),
(3, 'PING', 'HONG', 'M')
;


GRANT SELECT, INSERT, DELETE, UPDATE
ON domas_budrys_student_db.*
TO budrys1@localhost
IDENTIFIED BY 'domasgreat';
