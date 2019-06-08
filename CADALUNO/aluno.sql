
create schema sisaluno;

use sisaluno;

create table aluno(
	matricula int auto_increment,
    nome varchar(100) not null,
    sexo char(1) not null,
    data_nasc date not null,
    email varchar(50), 
    primary key (matricula)
) auto_increment=1000;

select * from aluno;

