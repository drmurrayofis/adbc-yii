DROP TABLE IF EXISTS `EMPLOYEE`;
CREATE TABLE `EMPLOYEE` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  `firstname` varchar(255) default NULL,
  `lastname` varchar(255) default NULL,
  `gender` varchar(255) default NULL,
  `department` varchar(255) default NULL,
  `city` varchar(255),
  `state` varchar(50) default NULL,
  `salary` INTEGER default NULL,
  `dependents` mediumint default NULL
);

INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Oprah","Reese","M","Payroll","Savannah","GA",60000,1);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Leroy","Sherman","M","Media Relations","Billings","MT",50000,1);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Dahlia","Pacheco","F","Tech Support","Columbia","MO",60000,2);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Brent","Watson","F","Legal Department","West Jordan","UT",999999999,2);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Karleigh","Talley","F","Media Relations","Des Moines","IA",50000,3);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Martha","Pate","F","Human Resources","Broken Arrow","OK",60000,1);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Sean","Fry","M","Customer Service","Madison","WI",60000,2);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Ignacia","Rivera","M","Asset Management","Madison","WI",50000,1);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Karina","Christensen","F","Human Resources","Philadelphia","PA",50000,1);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Donna","Bailey","M","Customer Relations","Springfield","MA",70000,2);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Veda","Garza","F","Human Resources","Nashville","TN",50000,5);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Darrel","Burke","M","Accounting","Milwaukee","WI",50000,1);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Freya","Santana","M","Accounting","Lafayette","LA",40000,3);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Quynn","Castaneda","M","Quality Assurance","Allentown","PA",60000,2);
INSERT INTO `EMPLOYEE` (`firstname`,`lastname`,`gender`,`department`,`city`,`state`,`salary`,`dependents`) VALUES ("Levi","Goldberg","F","Media Relations","Missoula","MT",60000,11);
