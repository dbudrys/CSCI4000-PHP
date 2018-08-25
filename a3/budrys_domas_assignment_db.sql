-- create and select the database
DROP DATABASE IF EXISTS kungfu_panda_shop;
CREATE DATABASE dombubco_kungfu_panda_shop;
USE domas_budrys_assignment_db;  -- MySQL comment uses --

-- create the tables
CREATE TABLE student (
  studentID       INT(11)        NOT NULL,
  name    VARCHAR(255)           NOT NULL,
  email   VARCHAR(255)           NOT NULL,
  PRIMARY KEY (studentID)
);


INSERT INTO student
VALUES
(1, 'PO BLACK', 'poblack@gmail.com'),
(2, 'SHIFU HOFFMAN', 'shifuhoffman@gmail.com'),
(3, 'TIGERSS JOLIE', 'tigerssjolie@gmail.com'),
(4, 'JENNIFER YUH', 'jenniferyuh@gmail.com'),
(5, 'OX STORMING', 'oxstorming@gmail.com'),
(6, 'MONKEY CHAN', 'monkeychan@gmail.com'),
(7, 'VIPER LIU', 'viperliu@gmail.com'),
(8, 'MANTIS ROGEN', 'mantisrogen@gmail.com'),
(9, 'CRANE CROSS', 'cranecross@gmail.com'),
(10, 'OOGWAY KIM', 'oogway@gmail.com'),
(11, 'PING HONG', 'pinghong@gmail.com');


-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON domas_budrys_assignment_db.*
TO dombubco_panda@localhost
IDENTIFIED BY 'richardchocolate';
