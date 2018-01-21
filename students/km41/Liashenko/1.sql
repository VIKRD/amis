CREATE TABLE HUMAN 
(
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    LOGIN LONG INTEGER (50)   not null,
    PASS NUMBER (4)   not null,
    ROLE BOOLEAN (2)   not null,
    MONEY MONEY (50)   not null,
    memberSince DATE DEFAULT '0000-00-00',
    PRIMARY KEY (id, LOGIN, ROLE)
            );
			
			CREATE TABLE DATA 
			(
    USER VARCHAR (25)   not null,
    ADMIN BOOLEAN (25)   not null,
    NAME_OF_FACULTY VARCHAR (50)   not null,
    LOGIN LONG INTEGER (50)  not null,
    ROLE BOOLEAN (2)  not null,
    PRIMARY KEY (ADMIN)
            );
			
			
			CREATE TABLE NAMEFUK 
			(
    COAST VARCHAR (50),
    NAME_OF_FACULTY VARCHAR (50)  not null,
    NAME_OF_UNIVERSITY VARCHAR (50)  not null,
    ADRES VARCHAR (25)  not null,
    PRIMARY KEY (NAME_OF_FACULTY)
            );
			
			CREATE TABLE UNIVERSITY 
			(
    NAME_OF_UNIVERSITY VARCHAR (50)  not null,
    ADRES VARCHAR (25)  not null,
    PRIMARY KEY (ADRES, NAME_OF_UNIVERSITY)
            );