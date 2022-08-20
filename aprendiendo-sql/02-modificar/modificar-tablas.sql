#RENOMBRAR UNA TABLA
ALTER TABLE usuarios RENAME TO usuarios_renom; 

#RENOMBRAR UN CAMPO
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(255) null;

#RENOMBRAR COLUMNA SIN CAMBIAR NOMBRE
ALTER TABLE usuarios_renom MODIFY apellido varchar(60) not null;

#AÑADIR
ALTER TABLE usuarios_renom ADD website varchar(40) not null;

#AÑADIR RESTRICCION
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);