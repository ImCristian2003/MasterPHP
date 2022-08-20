#MOSTRAR TODOS LOS REGISTROS DE UNA TABLA
SELECT * FROM usuarios;
#REGISTROS PUNTUALES
SELECT nombre, apellidos FROM usuarios
WHERE  id = 1;  

#OPERADORES ARITMETICOS
SELECT email, (5+63) as 'Suma' FROM usuarios;

#FUNCIONES MATEMATICAS------------------------------------
#VALOR ABSOLUTO
SELECT ABS(-7) FROM usuarios;
#REDONDEO A LA ALZA
SELECT CEIL(3.3) FROM usuarios;
#REDONDEO A LA BAJA
SELECT FLOOR(3.3) FROM usuarios;  
#TODO SE PUEDE BUSCAR EN SQL FUNCTIONS MATH

#FUNCIONES PARA TEXTOS--------------------------------
#MAYUSCULA
SELECT UPPER(nombre) FROM USUARIOS;
#MINUSCULA
SELECT LOWER(nombre) FROM USUARIOS;
#LIMPIAR ESPACIOS LATERALES DE LA CADENA
SELECT TRIM(CONCAT('    ', nombre, ' ', apellidos,'      ')) AS 'Conversion' FROM usuarios;

#FUNCIONES PARA FECHAS-----------------------------------
#FECHA ACTUAL
SELECT fecha, CURDATE() AS Fecha actual FROM usuarios;
#RESTAR FECHAS
SELECT DATEDIFF(fecha,CURDATE()) AS Fecha actual FROM usuarios;
#SACAR NOMBRE DEL DIA
SELECT DAYNAME(fecha) FROM usuarios;
#DIA DEL MES
SELECT DAYOFMONTH(fecha) FROM usuarios;
#HORA ACTUAL
SELECT CURTIME() FROM usuarios;
#FORMATEAR UNA FECHA
SELECT email, DATE_FORMAT(fecha,'%d-%m-%y') FROM usuarios;

#FUNCIONES GENERALES-----------------------------------------
#COMPROBAR SI UN CAMPO ES NULO
SELECT email, ISNULL(apellidos) FROM usuarios; 
#DISTINGUIR SI 2 VALORES SON IGUALES O DIFERENTES
SELECT email, STRCMP('Hola','Hola') FROM usuarios;
#MOSTRAR SOLO VALORES DISTINTOS
SELECT DISTINCT USER() FROM usuarios;
#COMPROBAR SI UN CAMPO ES NULO Y EN CONSECUENCIA PONER
#ALGO POR DEFECTO
SELECT IFNULL(apellidos, 'ESTE CAMPO ESTÁ VACIO') FROM usuarios;

#CONSULTAS CON CONDICIONES--------------------------------------
SELECT nombre, apellidos FROM usuarios
WHERE YEAR(fecha) = 2020;

SELECT nombre, apellidos FROM usuarios
WHERE YEAR(fecha) != 2020 OR ISNULL(fecha);

SELECT email FROM usuarios
WHERE apellidos like '%a%' AND password = '1234';

/*

    COMODINES: 
    Cualquier cantidad de caracteres: %
    Caracter desconocido: _

*/

SELECT * FROM usuarios
WHERE (YEAR(fecha)%2) = 0;

SELECT UPPER(nombre), apellidos FROM USUARIOS
WHERE LENGTH(nombre) > 5 AND YEAR(fecha) = 2019;

