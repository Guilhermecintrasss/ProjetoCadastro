DROP DATABASE IF EXISTS projeto1;
CREATE DATABASE projeto1;
use projeto1;

CREATE TABLE usuario (
id_usuario int(4) primary key auto_increment,
nome_usuario varchar(50) not null,
email_usuario varchar(50) not null,
fone_usuario varchar(30) null,
senha_usuario varchar(30) not null
);