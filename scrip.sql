create database livraria;

{

create table editora(
    codeditora serial primary key,
    nomeeditora varchar(80) unique not null
);

create table genero(
    codgenero serial primary key,
    nomegenero varchar(80) unique not null
);

create table livro(
    codlivro int AUTO_INCREMENT primary key not null,
    nomelivro varchar(80) unique not null,
    codgenero_fk int references genero(codgenero) on update cascade on delete cascade,
    codeditora_fk int references editora(codeditora) on update cascade on delete cascade,
    valor numeric(10,2) not null check (valor > 0),
    descricao varchar(180) not null,
    imagem varchar(80) not null
);

}

