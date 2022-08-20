#DISEÑO DE LA BASE DE DATOS DE UN CONCESIONARIO
#TABLA COCHES
CREATE TABLE coches(
    id      int(10) auto_increment not null,
    modelo  varchar(100) not null,
    marca   varchar(50),
    precio  int(20) not null,
    stock   int(255) not null,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

#TABLA GRUPOS
CREATE TABLE grupos(
    id      int(10) auto_increment not null,
    nombre  varchar(100) not null,
    ciudad  varchar(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id) 
)ENGINE=InnoDB;

#TABLA VENDEDORES
CREATE TABLE vendedores(
    id          int(10) auto_increment not null,
    grupo_id    int(10) not null,
    jefe        int(10),
    nombre      varchar(100) not null,
    apellidos   varchar(150),
    cargo       varchar(50),
    fecha       date,
    sueldo      float(20,2),
    comision    float(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedores_grupos FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedores_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

#TABLA CLIENTES
CREATE TABLE clientes(
    id              int(10) auto_increment not null,
    vendedor_id     int(10),
    nombre          varchar(150) not null,
    ciudad          varchar(100),
    gastado         float(50,2),
    fecha           fecha,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_clientes_vendedores FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

#TABLA ENCARGOS
CREATE TABLE encargos(
    id int(10) auto_increment not null,
    cliente_id int(10) not null,
    coche_id int(10) not null,
    cantidad int(100),
    fecha date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargos_clientes FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargos_coches FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

#RELLENAR LA BASE DE DATOS

#COCHES
INSERT INTO coches VALUES(null,'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(null,'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES(null,'Mercedes Ranchera', 'Mercedes Benz', 32000, 24);
INSERT INTO coches VALUES(null,'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES(null,'Lambo Aventador', 'Lamborghini', 170000, 2);
INSERT INTO coches VALUES(null,'Ferrari Spider', 'Ferrari', 245000, 80);

#GRUPOS
INSERT INTO grupos VALUES(null,'Vendedores A','Madrid');
INSERT INTO grupos VALUES(null,'Vendedores B','Madrid');
INSERT INTO grupos VALUES(null,'Directores Mecanicos','Madrid');
INSERT INTO grupos VALUES(null,'Vendedores A','Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores B','Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores C','Valencia');
INSERT INTO grupos VALUES(null,'Vendedores A','Bilbao');
INSERT INTO grupos VALUES(null,'Vendedores B','Pamplona');
INSERT INTO grupos VALUES(null,'Vendedores C','Santiago de Compostela');

#VENDEDORES
INSERT INTO vendedores VALUES(null,1,null,'David','Lopez','Responsable de Tienda',CURDATE(),30000,4);
INSERT INTO vendedores VALUES(null,1,1,'Fran','Martinez','Ayudante de Tienda',CURDATE(),23000,2);
INSERT INTO vendedores VALUES(null,2,null,'Nelson','Sanchez','Responsable de Tienda',CURDATE(),38000,5);
INSERT INTO vendedores VALUES(null,2,3,'Jesus','Lopez','Ayudante de Tienda',CURDATE(),12000,6);
INSERT INTO vendedores VALUES(null,3,null,'Victor','Lopez','Mecanico Jefe',CURDATE(),50000,2);
INSERT INTO vendedores VALUES(null,4,null,'Antonio','Lopez','Vendedor de Recambios',CURDATE(),13000,8);
INSERT INTO vendedores VALUES(null,5,null,'Salvador','Lopez','Vendedor Experto',CURDATE(),60000,2);
INSERT INTO vendedores VALUES(null,6,null,'Joaquin','Lopez','Ejecutivo de Cuentas',CURDATE(),80000,1);
INSERT INTO vendedores VALUES(null,6,8,'Luis','Lopez','Ayudante de Tienda',CURDATE(),10000,10);

#CLIENTES
INSERT INTO clientes VALUES(null, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Fruteria Antonia Inc', 'Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Imprenta Martinez Inc', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Jesús Colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());

#ENCARGOS
INSERT INTO encargos VALUES(null, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(null, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(null, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES(null, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES(null, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(null, 6, 6, 1, CURDATE());