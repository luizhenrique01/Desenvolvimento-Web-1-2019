create database sistema_escolar2d2;
use sistema_escolar2d2;

create table alunos(
matricula int unsigned auto_increment not null primary key,
nome varchar(80) not null,
sexo varchar(15) not null,
email varchar(100) not null,
endereco varchar(150) not null,
telefone char(15) not null,
senha varchar(150) not null
);

insert into alunos(matricula,nome,sexo,email,endereco,telefone,senha)
values(null,'Luiz henrique','Homem','uisa@aa.com','rua itajubarte',321321,'asdad1213s');
insert into alunos(matricula,nome,sexo,email,endereco,telefone,senha)
values(null,'Carlos henrique','Homem','ukkkka@aa.com','rua marte',89921,'vvvaa1');
insert into alunos(matricula,nome,sexo,email,endereco,telefone,senha)
values(null,'Sergio henrique','Homem','basadsa@aa.com','rua jubarte',000021,'44445aa');

create table professor(
numero int unsigned auto_increment not null primary key,
nome varchar(80) not null,
sexo varchar(15) not null,
email varchar(100) not null,
endereco varchar(150) not null,
materia varchar(40) not null,
telefone char(15) not null,
senha varchar(150) not null,

);