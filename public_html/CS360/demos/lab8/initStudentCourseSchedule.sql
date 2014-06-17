/**
 * initializes the student, course, and schedule tables and adds
 * a trigger and stored procedure
 * @version 080305
 * @author Pete Nordquist
 */

-- drop tables
DROP TABLE IF EXISTS schedule;
DROP TABLE IF EXISTS student;
DROP TABLE IF EXISTS course;

-- create tables
CREATE TABLE student (
	ID INT PRIMARY KEY,
	NAME VARCHAR(50)
	) engine=innodb;
CREATE TABLE course (
	CRN INT PRIMARY KEY,
	NAME VARCHAR(50)
	) engine=innodb;
CREATE TABLE schedule (
	ID INT,
	CRN INT, 
	constraint schedulePK primary key(ID,CRN),
	constraint studentFK foreign key(ID) references student(ID)
		on delete cascade on update cascade,
	constraint courseFK foreign key(CRN) references course(CRN)
		on delete cascade on update cascade
	) engine=innodb;


-- Create a few courses
INSERT INTO course VALUES (1, 'cs257');
INSERT INTO course VALUES (2, 'cs360');
INSERT INTO course VALUES (3, 'cs310');
INSERT INTO course VALUES (4, 'cs450');
INSERT INTO course VALUES (5, 'pe180');


