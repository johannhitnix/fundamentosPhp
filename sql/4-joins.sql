-- INNER JOIN
SELECT e.id, e.titulo, u.nombre AS autor, c.nombre AS category FROM entradas e 
INNER JOIN usuarios u 
ON e.usuario_id = u.id
INNER JOIN categorias c
ON e.categoria_id = c.id;

-- LEFT JOIN
SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY c.id;

-- RIGHT JOIN
SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY c.id;