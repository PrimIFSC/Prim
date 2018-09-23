create table usuario(
 id int primary key auto_increment,
 nome varchar(255) not null,
 email varchar(255) not null unique,
 senha varchar(100) not null,
usuario_id integer references usuario(id) -- contato
);

create table lista(
usuario_id int references usuario(id),
contato_id int references usuario(id),
primary key(usuario_id, contato_id)
);

select * from usuario;
select * from lista;

select .nome from usuario u join lista on u.id=lista.usuario_id join usuario c on c.id=lista.contato_id
   where u.id = $; 

select lista.usuario_id, c.nome from usuario u left join lista on u.id=lista.usuario_id right join usuario c on c.id=lista.contato_id
   where  lista.usuario_id is null and c.id != 2; 

select * from usuario where id = 
union all
select * from usuario where id = 2;

SELECT id, nome FROM usuario where id = 1 and usuario_id = 2;

--create table conteudo(
 --id int primary key auto_increment,
 --conteudo varchar(255) not null,
 --tipo ENUM('a', 'i', 't', 'v')
--);

--drop table conteudo;

create table mensagem(
 id int primary key auto_increment,
 usuario_id integer references usuario(id),
 contato_id integer references contato(id),
 conteudo_id integer references conteudo(id),
  hora timestamp -- pega data e hora
);

alter table mensagem add  conteudo varchar(255) not null

alter table mensagem add tipo ENUM('a', 'i', 't', 'v');

--alter table mensagem drop column conteudo_id

select now() -- botar isso no insert da mensagem

INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES
('bb', 'aa@aa', '123'),
('ss', 'ss@ss', '123'),
('dd', 'dd@dd', '123'),
('ee', 'ee@ee', '123'),
('uu', 'uu@uu', '123'),
('gg', 'gg@gg', '123'),
('beatriz', 'beatriz@b', '123'),
('bb', 'bb@bb', '123');

INSERT INTO `lista` (`usuario_id`, `contato_id`) VALUES
(4, 1),
(4, 5),
(4, 6),
(3, 4),
(2, 1),
(2, 3),
(5, 4),
(2, 5),
(5, 3),
(6, 5),
(2, 6),
(1, 8),
(1, 2);

select nome from usuario where id = 10;

select * from mensagem;

--fazer a tabela mensagem com as coisas que tem no conteúdo