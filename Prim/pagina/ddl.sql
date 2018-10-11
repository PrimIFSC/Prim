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

create table conteudo(
 id int primary key auto_increment,
 conteudo varchar(255) not null,
 tipo ENUM('a', 'i', 't', 'v')
);

create table mensagem(
 id int primary key auto_increment,
 usuario_id integer references usuario(id),
 contato_id integer references contato(id),
 conteudo_id integer references conteudo(id),
  hora timestamp -- pega data e hora
);

--------------------alter table mensagem add status ENUM('L', 'N') default 'N';

--create table online(
  --usuario_id int references usuario(id),
  --last_activity timestamp,
  --primary key(usuario_id)  
--);

--alter table mensagem add  conteudo varchar(255) not null;

--alter table mensagem add tipo ENUM('a', 'i', 't', 'v');

--alter table mensagem drop column conteudo_id

select * from usuario;
select * from lista;

select .nome from usuario u join lista on u.id=lista.usuario_id join usuario c on c.id=lista.contato_id
   where u.id = $; 

select lista.usuario_id, c.nome from usuario u left join lista on u.id=lista.usuario_id right join usuario c on c.id=lista.contato_id
   where  lista.usuario_id is null and c.id != 2; 

SELECT * FROM usuario;
SELECT id, nome FROM usuario where id = 1 and usuario_id = 2;

select u.nome, c.nome from usuario u, usuario c
  where c.id = c.usuario_id 

drop table usuario

select * from usuario;
insert into usuario values (default, 'aasssss', 'aa@aasss', '123');

--create table contato(
 --id int primary key auto_increment,
 --nome varchar(255) not null,
 --email varchar(255) not null unique,
 --senha varchar(100) not null,
--usuario_id integer references usuario(id)
--);

select now() -- botar isso no insert da mensagem


select c.id, c.nome from usuario u left join lista on u.id=lista.usuario_id right join usuario c on c.id=lista.contato_id
   where  lista.usuario_id is null and c.id !=  2

select * from conteudo;

select * from mensagem;

select * from usuario

insert into conteudo (conteudo, tipo) values ('oio', 'a');