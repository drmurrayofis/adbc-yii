DROP TABLE IF EXISTS PET;
CREATE TABLE PET(
    id varchar(4),
    name varchar(6),
    species varchar(6),
    breed varchar(20),
    gender varchar(6),
    owner varchar(4)
);

DROP TABLE IF EXISTS OWNER;
CREATE TABLE OWNER(
    id varchar(4),
    name varchar(7)
);

INSERT INTO PET VALUES('p001','King','Dog','BerneseMountain','Male', 'o002');
INSERT INTO PET VALUES('p002','Fiona','Dog','ItalianGreyhound','Female', 'o001');
INSERT INTO PET VALUES('p003','Ginsei','Cat','Mixed','Female', 'o001');
INSERT INTO PET VALUES('p004','Bo','Dog','LabradorMix','Male', 'o004');
INSERT INTO PET VALUES('p005','Cory','Dog','GermanShepherd','Male', 'o005');
INSERT INTO PET VALUES('p006','Brandy','Dog','Doberman','Female', 'o006');
INSERT INTO PET VALUES('p007','Mystic','Cat','MaineCoon','Male', 'o007');
INSERT INTO PET VALUES('p008','Mikey','Dog','Maltese','Female', 'o003');
INSERT INTO PET VALUES('p009','Angel','Dog','NGAGreyhound','Female', 'o002');
INSERT INTO PET VALUES('p010','Baby','Rabbit','FlemishGiant','Male', NULL);

INSERT INTO OWNER VALUES('o001', 'Brian');
INSERT INTO OWNER VALUES('o002', 'Jane');
INSERT INTO OWNER VALUES('o003', 'Angela');
INSERT INTO OWNER VALUES('o004', 'Thomas');
INSERT INTO OWNER VALUES('o005', 'Eric');
INSERT INTO OWNER VALUES('o006', 'Jordan');
INSERT INTO OWNER VALUES('o007', 'Maxwell');
INSERT INTO OWNER VALUES('o008', 'John');
