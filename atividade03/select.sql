create schema aulaSelecSql;

use aulaSelecSql;

create table cliente (
    codcli int primary key,
    nome varchar(50) not null,
    sexo char(1) not null,
    endereco varchar(100)
);

insert into cliente values(1, "Joao da Luz", 'M', "Rua Da Paz, 15");
insert into cliente values(2, "Maria da Vitoria", 'F', "Rua Do Amor, 25");
insert into cliente values(3, "Antonio da Paz", 'M', "Rua Da Esperanca, 12");
insert into cliente values(4, "Ana da Gloria", 'F', "Rua Da Paz, 25");
insert into cliente values(5, "Pedro Suspense", 'M', "Rua Da Loucura, 69");
insert into cliente values(6, "Joao Marcus", 'M', "Rua Da Loucura, 69");
insert into cliente values(7, "Maria das Gracas", 'F', "Rua Da Loucura, 69");
insert into cliente values(8, "Sem endereco 01", 'F', null);
insert into cliente values(9,"Sem endereco 01", 'M', null);

create table fornecedor(
    codfor int primary key,
    nome varchar(50) not null,
    uf char(2) not null,
    cidade varchar(15) not null,
    telefone varchar(15) not null
);

insert into fornecedor values (1, "AMOR e CIA", 'RN', "Caico", "8434212525");
insert into fornecedor values (2, "PAIXAO e CIA", 'PB', "Patos", "8334212525");
insert into fornecedor values (3, "SUCESSO e CIA", 'CE', "Fortaleza", "8533225566");
insert into fornecedor values (4, "MEDO e CIA", 'PE', "Recife", "8133225544");

create table produto(
    codprod int primary key,
    nome varchar(50) not null,
    preco real not null,
    fornecedor int not null,
    foreign key (fornecedor) references fornecedor(codfor)
);

insert into produto values(1,"Afeto", 250.00, 1);
insert into produto values(2,"Amizade", 350.00, 1);
insert into produto values(3,"Apego", 150.00, 1);
insert into produto values(4,"Ternura", 25.00, 1);
insert into produto values(5,"Dedicacao", 250.00, 1);

insert into produto values(6,"Idolatria", 1250.00, 2);
insert into produto values(7,"Entusiasmo", 850.00, 2);
insert into produto values(8,"Carinho", 850.00, 2);

insert into produto values(9,"Fama", 5000.00, 3);
insert into produto values(10,"Popularidade", 300.00, 3);
insert into produto values(11,"Simpatia", 25.00, 3);

insert into produto values(12,"Suspense", 5.00, 4);
insert into produto values(13,"Temor", 15.00, 4);
insert into produto values(14,"Horror", 25.00, 4);
insert into produto values(15,"Misericordia", 15.00, 4);

create table venda(
    codcli int not null,
    codprod int not null,
    data date not null,
    primary key(codcli, codprod),
    foreign key(codcli) references cliente(codcli),
    foreign key(codprod) references produto(codprod)
);

insert into venda values(1,1, '2010-01-7');
insert into venda values(1,2, '2012-10-12');
insert into venda values(1,3, '2012-12-12');
insert into venda values(1,4, '2010-10-10');

insert into venda values(2,5, '2001-01-01');
insert into venda values(2,6, '2011-11-11');
insert into venda values(2,7, '2010-01-7');

insert into venda values(4,9, '2010-01-5');
insert into venda values(4,10, '2005-08-7');
insert into venda values(4,11, '2006-06-9');

insert into venda values(5,12, '2009-04-7');
insert into venda values(5,13, '2011-12-5');
insert into venda values(5,14, '2012-08-9');



