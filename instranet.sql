DROP DATABASE IF EXISTS intranet;

CREATE DATABASE intranet;
USE intranet;

CREATE TABLE usuarios(
	usuario varchar(45) PRIMARY KEY,
	clave varchar(45) NOT NULL,
	admin boolean NOT NULL
);

CREATE TABLE datosPersonales(
		usuario varchar(45) PRIMARY KEY,
		nombre varchar(65),
		email varchar(45),
		FOREIGN KEY (usuario) REFERENCES usuarios(usuario)
);

CREATE TABLE sedes(
		ID_Sede int AUTO_INCREMENT PRIMARY KEY,
		sedes varchar(45) NOT NULL,
		descripcion varchar(255) NOT NULL,
		ruta varchar(40) NOT NULL
);

CREATE TABLE permisos(
	usuario varchar(45),
	ID_Sede int,
	PRIMARY KEY (usuario, ID_Sede),
	FOREIGN KEY (usuario) REFERENCES usuarios(usuario),
	FOREIGN KEY (ID_Sede) REFERENCES sedes(ID_Sede)
);

INSERT sedes VALUES
(NULL, 'Chintla', 'Chianta es una sede', 'chiantla.php'),
(NULL, 'Tutuapa', 'Tutuapa es una sede', 'tutuapa.php'),
(NULL, 'Momostenango', 'Momostenango es una sedes', 'momostenango.php'),
(NULL, 'Chiquirichiapa', 'Chiquirichapa es una sedes', 'chiquirichapa.php');


INSERT usuarios VALUES
('Admin', '1', 1),
('Mediador', '1', 0);

INSERT permisos VALUES
('Admin', 1), ('Admin', 2), ('Admin', 3), ('Admin', 4),
('Mediador', 1);