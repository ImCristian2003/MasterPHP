#CREACION BASE DE DATOS
#TABLA USUARIOS
#CREACION DE LA TABLA
CREATE TABLE usuarios(
    id int(11) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(100) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    fecha date not null,
    CONSTRAINT PK_usuarios PRIMARY KEY(id),
    CONSTRAINT UQ_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id int(11) auto_increment not null,
    nombre varchar(100),
    CONSTRAINT PK_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id int(11) auto_increment not null,
    usuario_id int(11) not null,
    categoria_id int(11) not null,
    titulo varchar(255) not null,
    descripcion MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT PK_entradas PRIMARY KEY(id),
    CONSTRAINT FK_entradas_usuarios FOREIGN KEY(usuario_id)
    REFERENCES usuarios(id),
    CONSTRAINT FK_entradas_categorias FOREIGN KEY(categoria_id)
    REFERENCES categorias(id)
)ENGINE=InnoDb;

#CASCADE -> ES UNA RESTRICCION QUE AYUDA CUANDO SE BORRA UN CAMPO QUE
#ESTÁ RELACIONADO, HAY VARIAS FUNCIONES