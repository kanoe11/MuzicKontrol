DROP DATABASE blog;
CREATE DATABASE blog;

CREATE TABLE article
(
    id int(20)  NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre varchar(100) NOT NULL ,
    user_id int(50) NOT NULL ,
    contenu text NOT NULL,
    type_article_id int NOT NULL,
    FOREIGN KEY (type_article_id) REFERENCES type_article (id),
    FOREIGN KEY (user_id) REFERENCES user(id)

);

create table user ( 
    id int(20) not null primary key auto_increment, 
    prenom varchar(100) not null , 
    nom varchar(100) not null , 
    age int not null
    );

create table type_article ( 
    id int(20) not null primary key auto_increment,
    nom varchar(100) not null
    );