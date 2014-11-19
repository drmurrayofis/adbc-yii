DROP TABLE IF EXISTS PET;
CREATE TABLE PET(
    id varchar(4),
    name varchar(6),
    species varchar(6),
    breed varchar(20),
    gender varchar(6)
);

DROP TABLE IF EXISTS SHELTER_ANIMAL;
CREATE TABLE SHELTER_ANIMAL(
    id varchar(4),
    name varchar(6),
    species varchar(6),
    breed varchar(20),
    gender varchar(6)
);

INSERT INTO PET VALUES('p001','King','Dog','BerneseMountain','Male');
INSERT INTO PET VALUES('p002','Fiona','Dog','ItalianGreyhound','Female');
INSERT INTO PET VALUES('p003','Ginsei','Cat','Mixed','Female');
INSERT INTO PET VALUES('p004','Bo','Dog','LabradorMix','Male');
INSERT INTO PET VALUES('p005','Cory','Dog','GermanShepherd','Male');
INSERT INTO PET VALUES('p006','Brandy','Dog','Doberman','Female');
INSERT INTO PET VALUES('p007','Mystic','Cat','MaineCoon','Male');
INSERT INTO PET VALUES('p008','Mikey','Dog','Maltese','Female');
INSERT INTO PET VALUES('p009','Angel','Dog','NGAGreyhound','Female');

INSERT INTO SHELTER_ANIMAL VALUES('p002','Fiona','Dog','ItalianGreyhound','Female');
INSERT INTO SHELTER_ANIMAL VALUES('p003','Ginsei','Cat','Mixed','Female');
INSERT INTO SHELTER_ANIMAL VALUES('p004','Bo','Dog','LabradorMix','Male');
INSERT INTO SHELTER_ANIMAL VALUES('p009','Angel','Dog','NGAGreyhound','Female');
INSERT INTO SHELTER_ANIMAL VALUES('p010','Baby','Rabbit','FlemishGiant','Male');
INSERT INTO SHELTER_ANIMAL VALUES('p011','Sadie','Dog','BassetHound','Female');
INSERT INTO SHELTER_ANIMAL VALUES('p012','Alex','Cat','Mixed','Male');
