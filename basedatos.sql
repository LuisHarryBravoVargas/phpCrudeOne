CREATE DATABASE IF NOT EXISTS crudePrueba;
use crudePrueba;

CREATE TABLE usuarios(
id          int(25) auto_increment not null,
codigo      int(25) not null,
nombre      varchar(100),
apellidos   varchar(255),
email       varchar(255) not null,
telefono    varchar(50),
tipoParticipacion varchar(255),
preparatoria varchar(100) not null,
bachillerato varchar(100) not null,
materia     varchar(100),
titulo      varchar(100),
competenciaADesarrollar varchar(255),
justificacion varchar(255),
fundamentacion varchar(255),
fecha       date not null
)ENGINE = InnoDb;

CREATE TABLE notas(
id          int(25)  auto_increment not null,
usuario_id  int(25) not null,
titulo      varchar(255) not null,
descripcion MEDIUMTEXT,
fecha       date not null,
CONSTRAINT  pk_notas PRIMARY KEY(id),
CONSTRAINT  fk_nota_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE = InnoDb;