create database hortifruti;
use hortifruti;
create table produtos(
    idProduto int not null auto_increment,
    primary key(idProduto),
    nome varchar(25) not null,
    preco decimal(5,2) not null,
    quantidade int not null,
    validade date not null
    )default charset=utf8;
