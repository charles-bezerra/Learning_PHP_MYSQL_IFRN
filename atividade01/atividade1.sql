create database atividade1;
use atividade1;
create table Funcao(
	descr varchar(20),
    salario varchar(10),
    codFun int primary Key
);
create table Empregado(
	codEmp int,
    nome varchar(30),
    codFun int,
    foreign key(codFun) references Funcao(codFun),
    primary key(codEmp)
);
create table Projeto(
	codPro int,
    tipo varchar(15),
    descr varchar(30),
    primary key(codPro)
);
create table ProjetoEmpregado(
	codEmp int,
    codPro int,
    dataInicial varchar(10),
	primary key(codEmp,codPro),
    foreign key(codEmp) references Empregado(codEmp),
    foreign key(codPro) references Projeto(codPro)
);