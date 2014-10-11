DROP TABLE IF EXISTS PET;
CREATE TABLE PET(
    id varchar(4),
    name varchar(6),
    species varchar(6),
    breed varchar(20),
    gender varchar(6),
    altered varchar(3)
);

INSERT INTO PET VALUES('0001','King','Dog','BerneseMountain','Male','Yes');
INSERT INTO PET VALUES('0002','Fiona','Dog','ItalianGreyhound','Female','Yes');
INSERT INTO PET VALUES('0003','Ginsei','Cat','Mixed','Female','Yes');
INSERT INTO PET VALUES('0004','Bo','Dog','LabradorMix','Male','Yes');
INSERT INTO PET VALUES('0005','Cory','Dog','GermanShepherd','Male','No');
INSERT INTO PET VALUES('0006','Brandy','Dog','Doberman','Female','Yes');
INSERT INTO PET VALUES('0007','Mystic','Cat','MaineCoon','Male','No');
INSERT INTO PET VALUES('0008','Mikey','Dog','Maltese','Female','No');
INSERT INTO PET VALUES('0009','Angel','Dog','NGAGreyhound','Female','Yes');
INSERT INTO PET VALUES('0010','Baby','Rabbit','FlemishGiant','Male','Yes');
