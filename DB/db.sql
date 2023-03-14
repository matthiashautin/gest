/*#########################################*/
/*####### CREATE BY MATTHIAS HAUTIN #######*/    
/*#######      VEJA FAIR TRADE      #######*/
/*#########################################*/
/*#############   22/02/2023   ############*/
/*#########################################*/

CREATE TABLE Sneakers (
    ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name_Sneakers VARCHAR(255) NOT NULL
);

CREATE TABLE Size (
    ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Size FLOAT NOT NULL
);

CREATE TABLE  Request (
    ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Sneakers_ID int(11) NOT NULL,
    Size_ID int(11) NOT NULL,
    state varchar(50) NOT NULL DEFAULT 'in progress',
    CONSTRAINT Fk_RequestSneakers FOREIGN KEY (Sneakers_ID) REFERENCES Sneakers(ID),
    CONSTRAINT FK_RequestSize FOREIGN KEY (Size_ID) REFERENCES Size(ID)
);