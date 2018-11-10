CREATE TABLE Child(ChildID INT, CFirstName VARCHAR(20), CLastName VARCHAR(20), CAddress VARCHAR(200), CEmail VARCHAR(20), CMobile VARCHAR(11), PRIMARY KEY (ChildID));

CREATE TABLE Staff(StaffID INT, SFirstname VARCHAR(20), SLastName VARCHAR(20), SMobile VARCHAR(11),SHomePhone VARCHAR(11), SEmail VARCHAR(100), SAddress VARCHAR(200), PRIMARY KEY (StaffID));

CREATE TABLE Sit(SitID INT, StartTime VARCHAR(5), EndTime VARCHAR(5),StartDate VARCHAR(10), EndDate VARCHAR(10), FK_ChildID INT, PRIMARY KEY (SitID), FOREIGN KEY (FK_ChildID) REFERENCES Child(ChildID));

CREATE TABLE Staff_Child_Link(FK_StaffID INT,  FK_ChildID INT, FOREIGN KEY (FK_StaffID) REFERENCES Staff(StaffID), FOREIGN KEY (FK_ChildID) REFERENCES Child(ChildID));

CREATE TABLE Staff_Sit_Link(FK_StaffID INT , FK_SitID INT ,FOREIGN KEY (FK_StaffID) REFERENCES Staff(StaffID),FOREIGN KEY (FK_SitID) REFERENCES Sit(SitID));

INSERT INTO Child VALUES(1, "John", "Smith", "221B Baker Street, marylebone, London, NW1 6XE", "JohnSmith1@gmail.com", "07123456789");

INSERT INTO Staff VALUES(1, "Bob", "Dylan", "07234567891", "07345678912", "BobDylan1@gmail.com", "Westminster, London, SW1A 0AA");

INSERT INTO Staff VALUES(2, "Martyn", "Little", "07456789123", "07567891234", "MartynLittle2@gmail.com", "Westminster, London, SW1A 0AA");

INSERT INTO Sit VALUES(1, "12:30", "13:30", "09/02/1999", "09/02/1999", 1);

INSERT INTO Staff_Child_Link VALUES(1, 1);

INSERT INTO Staff_Child_Link VALUES(2, 1);

INSERT INTO Staff_Sit_Link VALUES(1, 1);

INSERT INTO Staff_Sit_Link VALUES(2, 1);