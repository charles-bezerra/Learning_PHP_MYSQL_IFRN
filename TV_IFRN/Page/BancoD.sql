drop database sistv;
create database sistv;
use sistv;

create table pessoa(
		matricula varchar(14) primary key,
    nome varchar(60) not null,
    senha varchar(30) not null,
    email varchar(50) not null
);

create table mensagem(
		cod int primary key,
    matriculaAluno varchar(14) not null,
    tipo varchar(10) not null,
    title varchar(60),
    paragraple varchar(500) not null,
		foreign key(matriculaAluno) references pessoa(matricula)
);

insert into pessoa(matricula,nome,senha,email) values('20151104010436','Charles','12345@12345','charlesbezerra5@gmail.com');

create table sugestao(
		cod int primary key,
		titulo varchar (250) not null,
    sugestao varchar (2000) not null,
    matriculaAluno varchar(14) not null,
    FOREIGN KEY (matriculaAluno) REFERENCES pessoa( matricula )
);

create table desenvolvedor(
	login varchar(100) unique not null,
	senha varchar(100) not null,
	codigo int primary key auto_increment
);
