CREATE table users(
    iduser int PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    password varchar(255),
    email varchar(255),
    rol varchar(255)
    
)
CREATE table project(
    idprojet int PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    datecreation date ,

    idteam int ,
    foreign key idteam references idteam(idteam)
)
CREATE TABLE project (
    idproject INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    start_date DATE,
    end_date DATE,
    description TEXT,
    idteam INT,
    FOREIGN KEY (idteam) REFERENCES team(idteam)
);

CREATE table team(
idteam int PRIMARY KEY AUTO_INCREMENT,
name varchar(255),
datecreation date ,
iduser int,
foreign key  iduser references users(iduser)
)





































)
