SELECT ca.nombre as 'Nombre Categorias', COUNT(en.titulo) AS "Cantidad entradas", en.categoria_id 
FROM entradas as en
INNER JOIN categorias as ca
ON en.categoria_id = ca.id
GROUP BY categoria_id
HAVING COUNT(en.titulo) >= 2;