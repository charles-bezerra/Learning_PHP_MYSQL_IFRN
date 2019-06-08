create database viagens;
use viagens;
create table cliente(
	cpf int primary key,
    job varchar(20) not null,
    data_nascimento varchar(10) not null,
    endereco varchar(50) not null,
    sexo varchar(9) not null
);
create table telefones(
	telefone int,
    cpfCliente int,
    primary key(telefone, cpfCliente),
    foreign key(cpfCliente) references cliente(cpfCliente)
);
create table cidade(
	cod int primary key,
    nome varchar(30) not null,
    populacao int not null,
    estado varchar(30) not null
);
create table restaurante(
	cod int primary key,
    nome varchar(30) not null,
    categoria varchar(10) not null,
    endereco varchar(30) not null,
    codCidade int,
    foreign key(codCidade) references cidade(codCidade)
);
create table hotel(
	cod int primary key,
    nome varchar(30) not null,
    endereco varchar(50) not null,
    categoria varchar(10) not null,
    codCidade int,
    codRestaurante int,
    foreign key(codCidade) references cidade(codCidade),
    foreign key(codRestaurante) references restaurante(codRestaurante)
);
create table quarto(
	codHotel int,
    num_quarto int,
    valor float not null,
    tipo varchar(10),
    primary key(codHotel, num_quarto),
    foreign key(codHotel) references hotel(codHotel)
);
create table reservaHotel(
	cod int primary key,
    codHotel int,
    cpfCliente int,
    data_reserva varchar(10) not null,
    data_entrada varchar(10),
    data_saida varchar(10),
    quantidade_hps int not null,
    foreign key(codHotel) references hotel(codHotel),
    foreign key(cpfCliente) references cliente(cpfCliente)
);