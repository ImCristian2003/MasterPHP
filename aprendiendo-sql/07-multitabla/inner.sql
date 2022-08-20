#INNER JOIN: SE BASA EN TRAER INFORMACION DE OTRAS TABLAS
#Y EJECUTARLA EN UN SOLO RESULTADO
SELECT en.id, CONCAT(us.id,' - ',us.nombre) AS 'Usuario', CONCAT(ca.id,' - ',ca.nombre) AS 'Categorias', en.titulo, en.descripcion, en.fecha
FROM entradas AS en INNER JOIN usuarios AS us
ON en.usuario_id = us.id
INNER JOIN categorias AS ca
ON en.categoria_id = ca.id;

#MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y AL LADO CUANTAS
#ENTRADAS TIENEN
SELECT ca.nombre, COUNT(en.categoria_id)
FROM categorias as ca INNER JOIN entradas as en
ON ca.id = en.categoria_id
GROUP BY en.categoria_id;

#MOSTRAR EL EMAIL DE LOS USUARIOS, Y AL LADO CUANTAS
#ENTRADAS TIENEN
SELECT us.id, us.email, COUNT(en.usuario_id) AS 'Entradas'
FROM usuarios AS US INNER JOIN entradas AS en
ON us.id = en.usuario_id
GROUP BY us.email
ORDER BY id ASC; 