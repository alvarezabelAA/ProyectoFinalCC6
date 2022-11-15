CREATE DATABASE organizadorcc6;

USE organizadorcc6;

CREATE TABLE usuarios(
		id_usuario integer NOT NULL AUTO_INCREMENT,
		nombre char(50),
        usuario char(50),
		contrasena char(50),
		PRIMARY KEY (id_usuario)
);


CREATE TABLE grupo(
	id_grupo integer NOT NULL AUTO_INCREMENT,
    nombre_grupo char(50),
    PRIMARY KEY(id_grupo)
);


CREATE TABLE tareas(
	id_tarea  integer NOT NULL AUTO_INCREMENT,
    tipo_tarea char(50),
    id_receptor integer,
    contenido char(200),
    PRIMARY KEY(id_tarea)

);


CREATE TABLE comentario(
	id_nota integer NOT NULL AUTO_INCREMENT,
	id_receptor integer,
	contenido varchar(500),
	PRIMARY KEY(id_nota)
);

CREATE TABLE usuarios_de_grupo(
	id_usuario integer,
    id_grupo integer,
    PRIMARY KEY(id_usuario, id_grupo),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
	FOREIGN KEY (id_grupo) REFERENCES grupo(id_grupo)
);

CREATE TABLE asignacion_tareas(
	id_usuario integer,
    id_tarea integer,
    PRIMARY KEY(id_usuario, id_tarea),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
	FOREIGN KEY (id_tarea) REFERENCES tareas(id_tarea)
);


CREATE TABLE apunte_tarea(
	id_tarea integer,
    id_nota integer,
    PRIMARY KEY(id_tarea, id_nota),
    FOREIGN KEY (id_tarea) REFERENCES tareas(id_tarea),
	FOREIGN KEY (id_nota) REFERENCES comentario(id_nota)
);