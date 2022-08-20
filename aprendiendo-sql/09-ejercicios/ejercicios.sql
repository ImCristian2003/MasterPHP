#Ejercicio 2
#Modificar la comision de los vendedores y ponerla al 0.5 si gana mas
#de 50000
UPDATE vendedores
SET comision = 0.5
WHERE sueldo >= 50000;

#Ejercicio 3
#Incrementar el precio de los coches en un 2%
UPDATE coches
SET precio = (precio)+precio*0.02;

#Ejercicio 4
#Sacar a todos los vendedores cuya fecha de alta sea posterior
#al 1 de julio de 2022
SELECT * FROM vendedores
WHERE DAY(fecha) >= 1 AND MONTH(fecha) >= 7 AND YEAR(fecha) = 2022;
SELECT * FROM vendedores
WHERE fecha >= '2022-07-01';

#Ejercicio 5
#Mostrar todos los vendedores con su nombre y el numero de dias
#que llevan en el concesionario
SELECT nombre, ABS(DATEDIFF(fecha,CURDATE())) as Dias de trabajo
FROM vendedores;

#Ejercicio 6
#Visualizar el nombre y los apellidos de los vendedores en una misma 
#columna, su fecha de registro y el dia de la semana en
#que se registraron
SELECT CONCAT(nombre,' ', apellidos), fecha, DAYNAME(fecha)
FROM vendedores;

#Ejercicio 7
#Mostrar el nombre y el salario de los vendedores con cargo
#'Ayudante de tienda'
SELECT nombre, sueldo FROM vendedores
WHERE cargo = 'Ayudante de Tienda';

#Ejercicio 8
#Visualizar todos los coches en cuya marca exista la letra A y
#que el modelo empiece por f
SELECT * FROM coches
WHERE marca LIKE '%a%' AND modelo LIKE 'f%';

#Ejercicio 9
#Mostrar todos los vendedores del grupo 2 ordenados por salario
#de mayor a menor
SELECT * FROM vendedores
WHERE grupo_id = 2
ORDER BY sueldo DESC;

#Ejercicio 10
#Visualizar los apellidos de los vendedores, su fecha y su numero de
#grupo, ordenado por fecha descendente y mostrar los 4 ultimos
SELECT apellidos, fecha, grupo_id FROM vendedores
ORDER BY fecha DESC
LIMIT 4;

#Ejercicio 11
#Visuzalizar todos los cargos y el numero de vendedores que hay
#en cada cargpo
SELECT cargo, COUNT(id) FROM vendedores
GROUP BY cargo;

#Ejercicio 12
#Conseguir la masa salarial del concesionario (anual)
SELECT SUM(sueldo) as Masa Salarial FROM vendedores;

#Ejercicio 13
#Sacar la media de sueldos entre todos los vendedores por grupo
#CEIL sirve para no mostrar decimales
SELECT gr.nombre as 'Grupo', CEIL(AVG(ve.sueldo)) as 'Media', gr.ciudad     
FROM vendedores as ve INNER JOIN grupos as gr
ON ve.grupo_id = gr.id
GROUP BY gr.id;

#Ejercicio 14
#Visualizar las unidades totales vendidas de cada coche a cada cliente
#mostrando el nombre del producto, el numero de cliente y la
#suma de unidades
SELECT cl.nombre, co.modelo, SUM(en.cantidad)
FROM encargos as en INNER JOIN clientes as cl
ON en.cliente_id = cl.id
INNER JOIN coches as co
ON en.coche_id = co.id
GROUP BY cl.id;

#Ejercicio 15
#Mostrar los clientes con mayor numero de pedidos, y cuantos pedidos
#han hecho
SELECT CONCAT(cl.id,' - ',cl.nombre) as 'Cliente', COUNT(en.id) as Cantidad de Pedidos
FROM clientes as cl INNER JOIN encargos as en
ON cl.id = en.cliente_id
GROUP BY en.cliente_id
ORDER BY 2 DESC
LIMIT 2;

#Ejercicio 16
#Obtener listado de clientes atendidos por el vendedor David Lopez
SELECT ve.nombre, ve.apellidos, cl.nombre as 'Cliente'
FROM clientes as cl INNER JOIN vendedores as ve
ON ve.id = cl.vendedor_id
HAVING ve.nombre = 'Nelson' AND ve.apellidos = 'Sanchez';

SELECT * FROM clientes WHERE vendedor_id =(
    SELECT id FROM vendedores WHERE nombre = 'Nelson' AND apellidos = 'Sanchez'
);

#Ejercicio 17
#Obtener listado con los encargos realizados por el cliente
#Fruteria Antonia Inc
SELECT en.id, cl.nombre, CONCAT(co.modelo,' - ',co.marca), en.cantidad, en.fecha
FROM encargos as en INNER JOIN clientes as cl
ON en.cliente_id = cl.id
INNER JOIN coches as co
ON en.coche_id = co.id
WHERE cliente_id IN(
    SELECT id FROM clientes
    WHERE nombre = 'Fruteria Antonia Inc'
);

#Ejercicio 18
#Listar los clientes que han hecho algun encargo del coche
#Mercedes Ranchera
SELECT * FROM clientes
WHERE id IN(
    SELECT cliente_id FROM encargos
    WHERE coche_id IN(
        SELECT id FROM coches
        WHERE modelo = 'Mercedes Ranchera'
    )
);

#Ejercicio 19
#Obtener los vendedores con 2 o mas clientes
SELECT * FROM vendedores WHERE id IN(
    SELECT vendedor_id FROM clientes
    GROUP BY vendedor_id
    HAVING COUNT(id) >= 2
);

#Ejercicio 20
#Seleccionar el grupo en el que trabaja el vendedor con mayor salario
#y mostrar el nombre del grupo
SELECT gr.nombre, ve.nombre, ve.sueldo
FROM grupos as gr INNER JOIN vendedores as ve
ON gr.id = ve.grupo_id
WHERE gr.id IN(
    SELECT grupo_id FROM vendedores
)
ORDER BY ve.sueldo DESC
LIMIT 1;

#Ejercicio 21
#Obtener los nombres y ciudades de los clientes con encargos
#y que la cantidad del encargo sea mayor o igual a 3
SELECT nombre, ciudad FROM clientes
WHERE id IN(
    SELECT cliente_id FROM encargos
    WHERE cantidad >= 3
);

#Ejercicio 22
#Mostrar listado de clientes (id y nombre) 
#mostrar el numero de vendedor y su nombre
SELECT cl.id as 'ID Cliente',
cl.nombre as 'Nombre Cliente',
CONCAT(ve.id,' - ',ve.nombre) as 'Vendedor'
FROM clientes as cl INNER JOIN vendedores as ve
ON cl.vendedor_id = ve.id;

#Ejercicio 23
#Listar todos los encargos realizados con la marca del coche
#y el nombre del cliente
SELECT en.id, cl.nombre, co.marca, en.cantidad, en.fecha
FROM encargos as en INNER JOIN clientes as cl
ON en.cliente_id = cl.id
INNER JOIN coches as co
ON en.coche_id = co.id;

#Ejercicio 24
#Listar los encargos con el nombre del coche, el nombre del cliente
#y de la ciudad pero solo cuando sean de Madrid
SELECT en.id, cl.nombre, cl.ciudad, co.modelo
FROM encargos as en INNER JOIN clientes as cl
ON en.cliente_id = cl.id
INNER JOIN coches as co
ON en.coche_id = co.id
WHERE cl.ciudad = 'Barcelona';

#Ejercicio 25
#Obtener una lista de los nombres de los clientes
#con el importe de sus encargos acumulado
SELECT cl.nombre, SUM(en.cantidad*co.precio) as 'Importe'
FROM clientes as cl INNER JOIN encargos as en
ON cl.id = en.cliente_id
INNER JOIN coches as co
ON en.coche_id = co.id
GROUP BY cl.nombre;

#Ejercicio 26
#Sacar vendedores que tienen jefe y sacar el nombre del jefe
SELECT nombre, apellidos FROM vendedores
WHERE jefe IN(
    SELECT id FROM vendedores
) AND jefe IS NOT NULL;

#Ejercicio 27
#Visualizar los nombres de los cliente y la cantidad de encargos
#que han realizado, y los que no han hecho encargos
SELECT cl.nombre, COUNT(en.id) as Cantidad de encargos
FROM clientes as cl LEFT JOIN encargos as en
ON cl.id = en.cliente_id
GROUP BY cl.nombre
ORDER BY 2 ASC;

#Ejercicio 28
#Mostrar todos los vendedores y el numero
#de clientes tengan o no clientes
SELECT CONCAT(ve.nombre,' ',ve.apellidos), COUNT(cl.id)
FROM vendedores as ve LEFT JOIN clientes as cl
ON ve.id = cl.vendedor_id
WHERE ve.id IN(
    SELECT vendedor_id
    FROM clientes
) OR ve.id NOT IN(
    SELECT vendedor_id
    FROM clientes
)
GROUP BY ve.id
ORDER BY 2 ASC;

#Ejercicio 29
#Crear una vista llamada vendedoresA que incluira todos los
#vendedores del grupo 'Grupo A'
CREATE VIEW vendedoresA AS
SELECT * FROM vendedores
WHERE grupo_id IN(
    SELECT id FROM grupos
    WHERE nombre = 'Vendedores A'
);

#Ejercicio 30
#Mostrar los datos del vendedor con mas antiguedad en el concesionario
SELECT id, nombre, fecha
FROM vendedores
GROUP BY id
ORDER BY 3 ASC
LIMIT 1;

#Ejercicio 30 plus
#Obtener los datos de los coches con mas unidades vendidas
SELECT co.id, co.modelo, co.marca, co.precio, co.stock, SUM(en.cantidad)
FROM coches as co INNER JOIN encargos as en
ON co.id = en.cliente_id
WHERE co.id IN(
    SELECT cliente_id FROM encargos
)
GROUP BY en.coche_id
ORDER BY 6 DESC;