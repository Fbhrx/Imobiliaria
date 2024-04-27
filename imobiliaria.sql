create database imobiliaria;
use imobiliaria;

CREATE TABLE usuario(
	id int(4) auto_increment PRIMARY KEY,
	login varchar(10),
	senha varchar(100),
	permissao char(1)
);

CREATE TABLE imovel(
	id int(4) auto_increment PRIMARY KEY,
	descricao varchar(200),
	foto varcha(30),
	valor decimal(9,2),
	tipo char(1)
);

CREATE TABLE visualizacao(
	id int(4) auto_increment PRIMARY KEY,
	idUsuario int (4) not null, 
	idImovel int (4) not null, 
	data DATE,
	hora time,
	FOREIGN KEY(idUsuario) REFERENCES Usuario(id),
	FOREIGN KEY(idImovel) REFERENCES Imovel(id)
);