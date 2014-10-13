DROP TABLE IF EXISTS TEST_SCORES;
CREATE TABLE TEST_SCORES(
    StudentID varchar(2),
    TestID varchar(2),
    Score INTEGER
);

INSERT INTO TEST_SCORES VALUES('s1','t1',90);
INSERT INTO TEST_SCORES VALUES('s1','t2',87);
INSERT INTO TEST_SCORES VALUES('s1','t4',88);
INSERT INTO TEST_SCORES VALUES('s2','t1',100);
INSERT INTO TEST_SCORES VALUES('s2','t2',92);
INSERT INTO TEST_SCORES VALUES('s2','t3',85);
INSERT INTO TEST_SCORES VALUES('s2','t4',91);
INSERT INTO TEST_SCORES VALUES('s3','t1',50);
INSERT INTO TEST_SCORES VALUES('s3','t3',67);
INSERT INTO TEST_SCORES VALUES('s4','t2',82);
INSERT INTO TEST_SCORES VALUES('s4','t3',71);
INSERT INTO TEST_SCORES VALUES('s4','t4',75);
