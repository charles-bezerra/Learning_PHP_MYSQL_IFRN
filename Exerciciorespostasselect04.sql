use aulaselecsql;

select f.nome from fornecedor f where f.nome LIKE '%CESS%IA';

select * from fornecedor as f where f.cidade like ('%____%E') ;

select * from cliente as c, venda as v, produto as p, fornecedor as f where v.codcli = c.codcli
and p.preco<300 and p.nome like '_____%' and p.fornecedor = f.codfor and f.cidade like '_a%co';

select c.codcli, c.nome from cliente c where c.endereco is null;

select distinct c.nome from cliente c, venda v where c.codcli = v.codcli and c.endereco is null order by c.nome DESC;

select distinct c.nome as Nome, count(v.codprod) as Quantidade_Produto, sum(p.preco) as Preço 
from cliente c, venda v, produto p where c.codcli = v.codcli and v.codprod = p.codprod group by c.nome;  

select distinct p.nome, p.preco, f.nome from  produto p, fornecedor f where p.fornecedor = f.codfor and p.preco = (select max(preco) from produto);

select f.nome, avg(p.preco) media from fornecedor f, produto p where p.fornecedor = f.codfor group by f.nome;

select f.nome, p.nome from fornecedor f, produto p where p.fornecedor = f.codfor group by p.nome having max(p.preco)>500;

