--drop table users;
CREATE TABLE users
(
id_user INT IDENTITY(1,1) primary key,
nama varchar(255) not null,
email varchar(255),
pass varchar(50) not null,
alamat varchar(255),
no_hp varchar(15),
);

/*
insert into users values('Bastian','bastian.f@gmail.com','admin','keputih','081911262915');

select * from users;
*/