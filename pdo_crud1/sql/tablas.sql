drop table if exists users;
-- ----------------------------------------------------------------
create table users(
    id int auto_increment primary key,
    nombre varchar(40) not null,
    apellidos varchar(100) not null,
    username varchar(40) unique not null,
    mail varchar(60) unique not null,
    pass varchar(256) not null
);