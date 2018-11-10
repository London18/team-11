CREATE TABLE Child(ChildID INT PRIMARY KEY NOT NULL, CFirstName VARCHAR(20), CLastName VARCHAR(20), CAddress VARCHAR(200), CEmail VARCHAR(20), CMobile NUMBER(11));

CREATE TABLE Staff(StaffID INT PRIMARY KEY NOT NULL, SFirstname VARCHAR(20), SLastName VARCHAR(20), SMobile NUMBER(11),SHomePhone VARCHAR(11), SEmail VARCHAR(20), SAddress VARCHAR(200));

CREATE TABLE Sit(SitID INT PRIMARY KEY NOT NULL, StartTime VARCHAR(5), EndTime VARCHAR(5),StartDate VARCHAR(10), EndDate VARCHAR(10),ChildID foreign KEY REFERENCES Child(ChildID));

CREATE TABLE Staff_Child_Link(StaffID INT FOREIGN KEY REFERENCES Staff(StaffID), ChildID INT FOREIGN KEY REFERENCES Child(ChildID));

CREATE TABLE Staff_Sit_Link(StaffID INT FOREIGN KEY REFERENCES Staff(StaffID), SitID INT FOREIGN KEY REFERENCES Sit(SitID));

INSERT INTO Child(1, "John", "Smith", "221B Baker Street, marylebone, London, NW1 6XE", "JohnSmith1@gmail.com", "07123456789");

INSERT INTO Staff(1, "Bob", "Dylan", "07234567891", "07345678912", "BobDylan1@gmail.com", "Westminster, London, SW1A 0AA");

INSERT INTO Staff(2, "Martyn", "Little", "07456789123", "07567891234", "MartynLittle2@gmail.com", "Westminster, London, SW1A 0AA");

INSERT INTO Sit(1, "12:30", "13:30", "09/02/1999", "09/02/1999", 1);

INSERT INTO Staff_Child_Link(1, 1);

INSERT INTO Staff_Child_Link(2, 1);

INSERT INTO Staff_Sit_Link(1, 1);

INSERT INTO Staff_Sit_Link(2, 1);