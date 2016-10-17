create database  if not exists web2;

USE web2;

CREATE TABLE Usuarios ( nombre varchar (15) , clave varchar (55), tipo varchar(5), habilitado varchar(2),
						PRIMARY KEY (nombre) );