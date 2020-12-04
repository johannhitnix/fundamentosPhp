-- una consulta de agrupamiento permite agrupar por filas

SELECT * FROM entradas GROUP BY categoria_id;

SELECT * FROM entradas GROUP BY usuario_id;

-- cuenta la cantidad de titulos agrupados por categoría :)
SELECT COUNT(titulo) AS 'numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

-- HAVING
-- consulta de agrupamiento con condicion (que muestre agrupamientos mayores o iguales a 4)
SELECT COUNT(titulo) AS 'numero de entradas', categoria_id FROM entradas 
GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/*
FUNCIONES DE AGRUPAMIENTO
AVG : promedio
COUNT : cuenta los regs
MAX : valor maximo del grupo
MIN : valor minimo del grupo
SUM : suma todo el contenido del grupo
*/

SELECT AVG(id) AS 'media de ids' FROM entradas;
SELECT MAX(id) AS 'maximo id', titulo FROM entradas;
SELECT SUM(id) AS 'suma id', titulo FROM entradas;