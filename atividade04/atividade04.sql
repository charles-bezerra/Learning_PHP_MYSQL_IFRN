create database Revisao;
use Revisao;
create table Pessoa(
	cod int primary key,
	nome varchar(20),
    fornec varchar(20),
    data_ varchar(10),
    preco float,
    quant int
);