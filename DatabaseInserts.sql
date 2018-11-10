CREATE TABLE Child(ChildID INT, CFirstName VARCHAR(20), CLastName VARCHAR(20), CAddress VARCHAR(200), PRIMARY KEY (ChildID));

CREATE TABLE Staff(StaffID INT, SFirstname VARCHAR(20), SLastName VARCHAR(20), SMobile VARCHAR(11),SHomePhone VARCHAR(11), SEmail VARCHAR(100), SAddress VARCHAR(200), PRIMARY KEY (StaffID));

CREATE TABLE Sit(SitID INT, StartTime VARCHAR(5), EndTime VARCHAR(5),StartDate VARCHAR(10), EndDate VARCHAR(10), FK_ChildID INT, PRIMARY KEY (SitID), FOREIGN KEY (FK_ChildID) REFERENCES Child(ChildID));

CREATE TABLE Staff_Child_Link(FK_StaffID INT,  FK_ChildID INT, FOREIGN KEY (FK_StaffID) REFERENCES Staff(StaffID), FOREIGN KEY (FK_ChildID) REFERENCES Child(ChildID));

CREATE TABLE Staff_Sit_Link(FK_StaffID INT , FK_SitID INT ,FOREIGN KEY (FK_StaffID) REFERENCES Staff(StaffID),FOREIGN KEY (FK_SitID) REFERENCES Sit(SitID));

INSERT INTO Child VALUES(1, "John", "Smith", "221B Baker Street, NW1 6XE");
INSERT INTO Child VALUES(2, "Alex", "Hill", "53 Bank Lane, PO2 3OP");
INSERT INTO Child VALUES(3, "Jack", "Top", "43 Lane Street, DY6 9ED");
INSERT INTO Child VALUES(4, "Paddy", "Door", "23 Bron Lane, MV2 3PP");
INSERT INTO Child VALUES(5, "Greg", "Sea", "295 Street Avenue, LE2 0PE");

INSERT INTO Staff VALUES(1, "Bill", "Dylan", "07234567891", "01894276501", "BobDylan1@gmail.com", "Westminster, London, SW1A 0AA");
INSERT INTO Staff VALUES(2, "Martyn", "French", "07456789123", "01893027816", "Martynfrench@gmail.com", "34 Street Yard, SW2 0AA");
INSERT INTO Staff VALUES(3, "James", "Little", "07756201957", "01893074916", "jameslittle@gmail.com", "23 Elm Drive, DF2 9DK");
INSERT INTO Staff VALUES(4, "Hary", "Dangline", "07456789123", "01893033857", "harrydangline@gmail.com", "104 Drive Road, LP3 0AA");

INSERT INTO Sit VALUES(1, "12:00", "14:00", "16/11/2018", "16/11/2018", 1);
INSERT INTO Sit VALUES(2, "10:00", "11:00", "16/11/2018", "16/11/2018", 2);
INSERT INTO Sit VALUES(3, "12:30", "13:30", "16/11/2018", "16/11/2018", 3);
INSERT INTO Sit VALUES(4, "19:30", "20:30", "16/11/2018", "16/11/2018", 4);
INSERT INTO Sit VALUES(5, "18:30", "20:00", "16/11/2018", "16/11/2018", 5);
INSERT INTO Sit VALUES(6, "15:00", "17:00", "17/11/2018", "17/11/2018", 1);
INSERT INTO Sit VALUES(7, "10:00", "11:00", "17/11/2018", "17/11/2018", 2);
INSERT INTO Sit VALUES(8, "12:30", "13:30", "17/11/2018", "17/11/2018", 3);
INSERT INTO Sit VALUES(9, "12:30", "13:30", "17/11/2018", "17/11/2018", 4);
INSERT INTO Sit VALUES(10, "12:30", "13:30", "17/11/2018", "17/11/2018", 5);
INSERT INTO Sit VALUES(11, "12:30", "13:30", "18/11/2018", "18/11/2018", 1);
INSERT INTO Sit VALUES(12, "10:00", "11:00", "18/11/2018", "18/11/2018", 2);


INSERT INTO Staff_Child_Link VALUES(1, 1);
INSERT INTO Staff_Child_Link VALUES(2, 1);
INSERT INTO Staff_Child_Link VALUES(3, 2);
INSERT INTO Staff_Child_Link VALUES(4, 3);
INSERT INTO Staff_Child_Link VALUES(1, 4);
INSERT INTO Staff_Child_Link VALUES(2, 5);
INSERT INTO Staff_Child_Link VALUES(3, 5);
INSERT INTO Staff_Sit_Link VALUES(1, 1);
INSERT INTO Staff_Sit_Link VALUES(2, 1);
