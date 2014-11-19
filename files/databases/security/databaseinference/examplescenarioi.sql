DROP TABLE IF EXISTS EMPLOYEE;
CREATE TABLE EMPLOYEE(
    lastname VARCHAR(8),
    gender CHAR(1),
    title VARCHAR(10),
    city VARCHAR(10),
    state CHAR(2),
    salary INTEGER,
    dependents INTEGER
);

INSERT INTO EMPLOYEE VALUES('Monroe', 'F', 'Consultant', 'Atlanta', 'GA', 50000, 2);
INSERT INTO EMPLOYEE VALUES('Jobs', 'M', 'DBA', 'Cupertino', 'CA', 98000, 1);
INSERT INTO EMPLOYEE VALUES('Goldberg', 'F', 'Manager', 'Palo Alto', 'CA', 76000, 11);
INSERT INTO EMPLOYEE VALUES('Gay', 'M', 'Director', 'Sacramento', 'CA', 82000, 3);
INSERT INTO EMPLOYEE VALUES('Gates', 'M', 'Director', 'Seattle', 'WA', 198000, 5);
INSERT INTO EMPLOYEE VALUES('Hopper', 'F', 'Manager', 'Boston', 'MA', 32000, 2);
INSERT INTO EMPLOYEE VALUES('Wozniack', 'M', 'Director', 'Freemont', 'CA', 65000, 3);
INSERT INTO EMPLOYEE VALUES('Codd', 'M', 'Consultant', 'San Jose', 'CA', 22000, 4);
