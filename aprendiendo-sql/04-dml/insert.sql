#INSERTAR REGISTROS
INSERT INTO usuarios VALUES(null,"Besame","Lasnalgas","picos@sapos.com","123","2022-05-27");
INSERT INTO usuarios VALUES(null,"Albajad","Mamad","holi@sapos.com","123","2022-06-20");
INSERT INTO usuarios VALUES(null,"Eduardo","Vergalarga","aja@sapos.com","123","2022-09-13");
INSERT INTO usuarios VALUES(null,"Elpi","Jalarga","aja@sapos.com","1234","2019-07-20");

#INSERTAR FILAS CON CIERTAS COLUMNAS
#SE DEBEN ESPECIFICAR LAS COLUMNAS QUE SE QUIEREN INSERTAR
INSERT INTO usuarios (email,password) VALUES("holi@jojo","1234");

#INSERTS TABLAS
#CATEGORIAS
INSERT INTO categorias VALUES(null,"Acción");
INSERT INTO categorias VALUES(null,"Aventura");
INSERT INTO categorias VALUES(null,"Romance");
INSERT INTO categorias VALUES(null,"Terror");
INSERT INTO categorias VALUES(null,"Ciencia Ficcion");

#ENTRADAS
INSERT INTO entradas VALUES(null,1,3,"Pijacorta","Pelicula chimba","2019-06-25");
INSERT INTO entradas VALUES(null,1,2,"Pijacortaa","Pelicula chimbaa",CURDATE());

INSERT INTO entradas VALUES(null,3,2,"Almamarcelagoso","Pelicula re chimba","2020-06-30");
INSERT INTO entradas VALUES(null,3,5,"Almamarcelagosooo","Pelicula re contra chimba",CURDATE());

INSERT INTO entradas VALUES(null,6,1,"Paraquito","Pelicula horrible","2020-03-05");
INSERT INTO entradas VALUES(null,6,2,"Paraquitos","Pelicula recontrahorrible",CURDATE());

INSERT INTO entradas VALUES(null,2,4,"Petro God","Recomendadisima","2021-10-23");
INSERT INTO entradas VALUES(null,2,3,"Petro Godzilla","Recomendadisima al 100",CURDATE());

INSERT INTO entradas VALUES(null,6,4,"Aiwantu","Melo","2021-10-31");
INSERT INTO entradas VALUES(null,6,1,"Iwachu","Melisimo",CURDATE());
