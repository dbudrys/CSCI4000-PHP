
DROP DATABASE IF EXISTS domas_budrys_assignment_db;
CREATE DATABASE domas_budrys_assignment_db;
USE domas_budrys_assignment_db; 



CREATE TABLE STUDENT (
  studentID     INT(11)             NOT NULL AUTO_INCREMENT,
  name          VARCHAR(255)        NOT NULL,
  email         VARCHAR(255)        NOT NULL,
  GPA           DECIMAL(4,2)        NOT NULL,
  
  PRIMARY KEY (studentID)
 
);


INSERT INTO STUDENT (name, email, GPA)
VALUES
('PO BLACK', 'poblack@gmail.com', 3.51),
('SHIFU HOFFMAN', 'shifuhoffman@gmail.com', 2.52),
('TIGRESS JOLIE', 'tigressjolie@gmail.com', 3.63),
('JENNIFER YUH', 'jenniferyuh@gmail.com', 1.44),
('OX STORMING', 'oxstorming@gmail.com', 3.95),
('MONKEY CHAN', 'monkeychan@gmail.com', 4.00),
('VIPER LIU', 'viperliu@gmail.com', 2.37),
('MANTIS ROGEN', 'mantisrogen@gmail.com', 3.29), 
('CRANE CROSS', 'cranecross@gmail.com', 3.72),
('OOGWAY KIM', 'ogwaykim@gmail.com', 1.53),
('PING HONG', 'pinghong@gmail.com', 2.52)
;


GRANT SELECT, INSERT, DELETE, UPDATE
ON domas_budrys_assignment_db.*
TO domasweb@localhost
IDENTIFIED BY 'budryschocolate';
