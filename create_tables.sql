crreate database blog;
use blog;

create table if not exists users(
id int AUTO_INCREMENT,
username varchar(255), 
password varchar(255),
email varchar(255),
admin int,
primary key(id)
);

create table if not exists posts(
id int AUTO_INCREMENT,
title varchar(255),
content text,
date varchar(255),
primary key(id)
); 