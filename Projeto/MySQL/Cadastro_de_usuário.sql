create database dbwadley;
Use dbwadley;

create table usuario (

ID int(10) primary key auto_increment,
NOME varchar(70) not null,
LOGIN varchar(25) not null unique,
SENHA varchar(50) not null,
EMAIL varchar(100) not null unique
);