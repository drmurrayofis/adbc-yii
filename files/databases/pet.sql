DROP TABLE IF EXISTS OWNER;
CREATE TABLE OWNER(
    `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    `name` varchar(7)
);

DROP TABLE IF EXISTS PET;
CREATE TABLE PET(
    `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name varchar(6),
    species varchar(6),
    breed varchar(20),
    gender char(1),
    altered char(1),
    owner INTEGER,
    FOREIGN KEY(owner) REFERENCES OWNER(id)
);

DROP TABLE IF EXISTS SHELTER_ANIMAL;
CREATE TABLE SHELTER_ANIMAL(
    `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name varchar(6),
    species varchar(6),
    breed varchar(20),
    gender char(1)
);


INSERT INTO OWNER(`name`) VALUES('Brian');
INSERT INTO OWNER(`name`) VALUES('Jane');
INSERT INTO OWNER(`name`) VALUES('Angela');
INSERT INTO OWNER(`name`) VALUES('Thomas');
INSERT INTO OWNER(`name`) VALUES('Eric');
INSERT INTO OWNER(`name`) VALUES('Jordan');
INSERT INTO OWNER(`name`) VALUES('Maxwell');
INSERT INTO OWNER(`name`) VALUES('John');

INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('King','Dog','BerneseMountain','M', 'N', 1);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Fiona','Dog','ItalianGreyhound','F', 'Y', 2);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Ginsei','Cat','Mixed','F', 'N', 5);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Bo','Dog','LabradorMix','M', 'Y', 5);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Cory','Dog','GermanShepherd','M', 'Y', 8);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Brandy','Dog','Doberman','F', 'N', 3);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Mystic','Cat','MaineCoon','M', 'Y', 4);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Mikey','Dog','Maltese','F', 'N', 6);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Angel','Dog','NGAGreyhound','F', 'Y', 7);
INSERT INTO PET(`name`, `species`, `breed`, `gender`, `altered`, `owner`) VALUES('Baby','Rabbit','FlemishGiant','M', 'N', NULL);

INSERT INTO SHELTER_ANIMAL(`name`, `species`, `breed`, `gender`) VALUES('Fiona','Dog','ItalianGreyhound','F');
INSERT INTO SHELTER_ANIMAL(`name`, `species`, `breed`, `gender`) VALUES('Ginsei','Cat','Mixed','F');
INSERT INTO SHELTER_ANIMAL(`name`, `species`, `breed`, `gender`) VALUES('Bo','Dog','LabradorMix','M');
INSERT INTO SHELTER_ANIMAL(`name`, `species`, `breed`, `gender`) VALUES('Angel','Dog','NGAGreyhound','F');
INSERT INTO SHELTER_ANIMAL(`name`, `species`, `breed`, `gender`) VALUES('Baby','Rabbit','FlemishGiant','M');
INSERT INTO SHELTER_ANIMAL(`name`, `species`, `breed`, `gender`) VALUES('Sadie','Dog','BassetHound','F');
INSERT INTO SHELTER_ANIMAL(`name`, `species`, `breed`, `gender`) VALUES('Alex','Cat','Mixed','M');
