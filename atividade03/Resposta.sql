use aulaselecsql;
select nome from cliente where sexo = 'M';
select f.nome from fornecedor f, produto p where p.nome = 'AMIZADE' and p.fornecedor = f.codFor;
select p.nome,p.preco,f.nome, f.cidade from produto as p, fornecedor as f where p.nome ='Horror' and p.preco <= 1000 and f.cidade='Recife' and p.fornecedor = f.codFor;
select distinct(c.nome), f.nome from cliente as c, fornecedor as f, venda as v, produto as p where f.uf='RN' and c.codcli = v.codcli and f.codfor = p.fornecedor and p.codprod = v.codprod;
select c.nome, p.nome from cliente as c, produto as p, venda as v where p.nome = 'Fama' and c.codcli = v.codcli and v.codprod = p.codprod;
select c.nome, v.data from cliente as c, venda as v where v.data < "2011-01-01" and c.codcli = v.codcli;
select * from fornecedor as f where f.uf='RN' or f.uf='CE'or f.uf='PB';
select p.nome, p.preco from fornecedor as f, produto as p where f.codfor = p.fornecedor and f.nome = 'Amor e CIA';
select * from cliente;
select * from fornecedor;
select p.*,f.nome from fornecedor as f, produto as p where p.fornecedor = f.codfor;