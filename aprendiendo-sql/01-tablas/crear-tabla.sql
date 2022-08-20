 CREATE TABLE usuarios (

     id varchar(11) not null,
     nombre varchar(100) not null,
     apellidos varchar(255) not null,
     email varchar(100) not null,
     #EL DEFAULT SIRVE PARA PONER TEXTO POR DEFECTO
     password varchar(255) not null DEFAULT '123',

 );

 INSERT INTO usuarios_renom VALUES('21','Benito','Camelas','barbapapa@ad.com','123');