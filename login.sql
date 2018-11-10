CREATE DATABASE users;
USE users;
CREATE TABLE Carer (user TEXT NOT NULL, password TEXT NOT NULL);

CREATE TABLE Nurse (user TEXT NOT NULL, password TEXT NOT NULL);




INSERT INTO Carer (user,password) VALUES ("abb1","password");
INSERT INTO Carer (user,password) VALUES ("bqq","1234");




INSERT INTO Nurse (user,password) VALUES ("my_n","9876");
INSERT INTO Nurse (user,password) VALUES ("lll","21831");
INSERT INTO Nurse (user,password) VALUES ("pppp","dg1");
