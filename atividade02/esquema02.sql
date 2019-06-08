create database esquema02;
use esquema02;
create table homem(
	nome varchar(35) not null,
    idade varchar(3) not null,
    codHm int primary key
);
create table mulher(
	nome varchar(35) not null, 
    idade varchar(3) not null,
    codMl int primary key
);
create table casamento(
	codHm int,
    codMl int,
    data_ varchar(10) not null,
    primary key(codHm,codMl),
    foreign key(codHm) references homem(codHm),
    foreign key(codMl) references mulher(codMl)
);
create table filho(
	cod int primary key,
    nome varchar(35) not null,
    sexo varchar(1) not null,
    codHm int,
    codMl int,
    foreign key(codHm) references homem(codHm),
    foreign key(codMl) references mulher(codMl)
);