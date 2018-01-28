DROP DATABASE IF EXISTS blogdb;
CREATE DATABASE IF NOT EXISTS blogdb;


DROP TABLE if EXISTS entry_tag;
DROP TABLE if EXISTS entry;
DROP TABLE if EXISTS tag;
DROP TABLE if EXISTS category;
DROP TABLE if EXISTS user;

CREATE TABLE user (
id SMALLINT(5) AUTO_INCREMENT,
login VARCHAR(40) NOT NULL,
passwd VARCHAR(40) NOT NULL,
name VARCHAR(150) NOT NULL,
lastname VARCHAR(150) NOT NULL,
role VARCHAR(30) NOT NULL,
email VARCHAR(255) NOT NULL,
image VARCHAR(255) DEFAULT NULL,
PRIMARY KEY (id),
UNIQUE KEY login (login),
INDEX(email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE category (
id SMALLINT(5) UNSIGNED AUTO_INCREMENT,
name VARCHAR(250) NOT NULL,
description VARCHAR(250) NOT NULL,
PRIMARY KEY (id),
KEY(name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE entry (
id INT(11) AUTO_INCREMENT,
user_id SMALLINT(5) NOT NULL,
category_id SMALLINT(5) unsigned NOT NULL,
title VARCHAR(250) NOT NULL,
content VARCHAR(750) NOT NULL,
status VARCHAR(50) NOT NULL,
IMAGE VARCHAR(250) DEFAULT NULL,
PRIMARY KEY (id),
KEY(title),
FOREIGN KEY (user_id) REFERENCES user(id),
FOREIGN KEY (category_id) REFERENCES category(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE tag (
id INT(11) AUTO_INCREMENT,
name VARCHAR(250) NOT NULL,
description VARCHAR(250) NOT NULL,
PRIMARY KEY (id),
KEY(name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE entry_tag (
id SMALLINT(5) UNSIGNED AUTO_INCREMENT,
entry_id INT(11) NOT NULL,
tag_id INT(11) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (entry_id) REFERENCES entry(id),
FOREIGN KEY (tag_id) REFERENCES tag(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO category (name,description) VALUES('Web development','Web development category'), 
('Android development','Android development category'), ('Angular development','Angular category development'), 
('Symfony development','Symfony category development');

INSERT INTO tag (name,description) VALUES('php','php tag'), 
('java','java tag'),('html','html tag'),('symfony','symfony tag'),('zend framework','zend framework tag');

INSERT INTO user (login,passwd,name,lastname,role,email,image) 
VALUES('jlago','Minho3jlc','Jesus','Lago Castillo','admin','j.lagocastillo@gmail.com',NULL),
('filemonpi','123456','Filemon','Pi','user','filemonpi@gmail.com',NULL),
('mortadelo13','23456','Mortadelo','Mortadelez','user','mortadelo@gmail.com',NULL);

INSERT INTO entry (user_id,category_id,title,content,status) 
VALUES(1,1,'PHP entry','This is for php entry development','public'),
(2,2,'Java entry','This is for java entry development from Filemon','public'),
(1,4,'Symfony entry','This is for symfony entry development','public'),
(3,1,'PHP entry Mortadelo','This is for php entry development from Mortadelo','public');

INSERT INTO entry_tag (entry_id,tag_id) VALUES (1,1),(1,4),(1,5),(3,1),(3,4),(4,1),(4,4),(4,5),(2,2);  