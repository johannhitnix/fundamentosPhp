-- una vista es una consulta almacenada en la base de datos, se usa como una tabla virtual
-- no almacena datos sino que utiliza asociaciones y los datos originales de las tablas
-- de forma que siempre se mantiene acutalizada
-- muy util para consultas reiterativas

CREATE VIEW categorias_con_conteo AS 
SELECT c.nombre, COUNT(e.id) AS total FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY c.id;

DROP VIEW categorias_con_conteo;

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS autor, c.nombre AS category FROM entradas e 
INNER JOIN usuarios u 
ON e.usuario_id = u.id
INNER JOIN categorias c
ON e.categoria_id = c.id;

DROP VIEW entradas_con_nombres;