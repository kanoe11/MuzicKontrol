DROP DATABASE musickontrol;
CREATE DATABASE musickontrol;

CREATE TABLE article
(
    id int(20)  NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL ,
    user_id int(50) NOT NULL ,
    contenu text NOT NULL,
    type_article_id int NOT NULL,
    visible TINYINT(1),
    FOREIGN KEY (type_article_id) REFERENCES type_article (id),
    FOREIGN KEY (user_id) REFERENCES user(id)

);

create table user ( 
    id int(20) not null primary key auto_increment, 
    prenom VARCHAR(100) not null , 
    nom VARCHAR(100) not null , 
    age int not null
    );

create table type_article ( 
    id int(20) not null primary key auto_increment,
    nom VARCHAR(100) not null
    );