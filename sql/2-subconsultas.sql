/*
    SUBCONSULTAS:
    - son consultas que se ejecutan dentro de otras
    - se utilizan los resultados de l subconsulta para operar en la consulta principal
*/

--insert into usuarios (nombre, apellidos, email, password, fecha) values ('Krilin', 'Acares', 'krilin@gmail.com', 'asdf', curdate());

SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);

SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);

-- sacar los usuarios que tengan en la entrada de sus titulos GTA
SELECT nombre, apellidos FROM usuarios 
WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

-- EJEMPLOS 

--#1 Sacar todas las entradas de la categoria accion utilizando su nombre
SELECT titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'Accion');
--#2 Mostrar las categorias con mas de 3 entradas
SELECT * FROM categorias WHERE id IN
(SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);
--#3 Mostrar los usuarios que crearor una entrada un martes
SELECT * FROM usuarios WHERE id IN
(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 5);
--#4 Mostrar el nombre de el usuario que tenga mas entradas
SELECT CONCAT(nombre, ' ', apellidos) AS 'The King of Fighters' FROM usuarios WHERE id =
(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);
--#5 Mostarar las categorias sin entradas
SELECT * FROM categorias WHERE id NOT IN
(SELECT categoria_id FROM entradas);




