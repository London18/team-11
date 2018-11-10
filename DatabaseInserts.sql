CREATE TABLE Child(ChildID INTEGER(5) PRIMARY KEY NOT NULL, CFirstName VARCHAR2(20), CLastName VARCHAR2(20), CAddress VARCHAR2(200), CEmail VARCHAR2(20), CMobile NUMBER(11));

CREATE TABLE Staff(StaffID INTEGER(5) PRIMARY KEY NOT NULL, SFirstname VARCHAR2(20), SLastName VARCHAR2(20), SMobile NUMBER(11),SHomePhone NUMBER(11), SEmail VARCHAR2(20), SAddress VARCHAR2(200));

CREATE TABLE Sit(SitID INTEGER(5) PRIMARY KEY NOT NULL, StartTime VARCHAR2(5), EndTime VARCHAR2(5),StartDate VARCHAR2(10), EndDate VARCHAR2(10),ChildID foreign KEY REFERENCES Child(ChildID));

CREATE TABLE Staff_Child_Link(StaffID INTEGER(5) FOREIGN KEY REFERENCES Staff(StaffID), ChildID INTEGER(5) FOREIGN KEY REFERENCES Child(ChildID));

CREATE TABLE Staff_Sit_Link(StaffID INTEGER(5) FOREIGN KEY REFERENCES Staff(StaffID), SitID INTEGER(5) FOREIGN KEY REFERENCES Sit(SitID));

INSERT INTO Child(1, "John", "Smith", "221B Baker Street, marylebone, London, NW1 6XE", "JohnSmith1@gmail.com", 07123456789);

INSERT INTO Staff(1, "Bob", "Dylan", 07234567891, 07345678912, "BobDylan1@gmail.com", "Westminster, London, SW1A 0AA");

INSERT INTO Staff(2, "Martyn", "Little", 07456789123, 07567891234, "MartynLittle2@gmail.com", "Westminster, London, SW1A 0AA");

INSERT INTO Sit(1, "12:30", "13:30", "09/02/1999", "09/02/1999", 1);

INSERT INTO Staff_Child_Link(1, 1);

INSERT INTO Staff_Child_Link(2, 1);

INSERT INTO Staff_Sit_Link(1, 1);

INSERT INTO Staff_Sit_Link(2, 1);