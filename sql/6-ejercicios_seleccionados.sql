-- #1 
SELECT g.nombre, v.grupo_id, AVG(v.sueldo) AS promedio FROM vendedores v INNER JOIN grupos g ON v.grupo_id = g.id GROUP BY v.grupo_id;

-- #2 mostar unidades totales vendidas de cada coche a cada cliente mostrando el nombre del producto, nombre de cliente y la suma de unidades.
SELECT cli.nombre, co.modelo, en.cantidad FROM coches co 
INNER JOIN encargos en ON co.id = en.coche_id
INNER JOIN clientes cli ON cli.id = en.cliente_id;

-- #3 mostar los clientes con mas peiddos y mostrar cuantso hicieeron
SELECT cli.nombre, SUM(en.cantidad) AS total FROM clientes cli
INNER JOIN encargos en ON cli.id = en.cliente_id
GROUP BY en.cliente_id ORDER BY SUM(en.cantidad) DESC;

-- nota: con ORDER BY 2 ordena teniendo en cuenta la segunda columna de la consulta
SELECT cliente_id, COUNT(id) FROM encargos GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;

SELECT cli.nombre, COUNT(en.id) AS conteo FROM encargos en
INNER JOIN clientes cli ON cli.id = en.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC;

-- #4 Obtener el listado de clientes atendidos por 'David Lopez'
SELECT cli.nombre AS cliente, CONCAT(ven.nombre,' ',ven.apellidos) AS vendedor FROM clientes cli
INNER JOIN vendedores ven ON cli.vendedor_id = ven.id
WHERE ven.nombre = 'David' AND ven.apellidos = 'Lopez';
-- victor
SELECT * FROM clientes WHERE vendedor_id IN
(SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');

-- #5 otbener listado con los encargos realizados por el  liente "Futeria Antonia Inc"
SELECT en.id, cli.nombre as cliente, co.modelo, en.cantidad, en.fecha FROM encargos en INNER JOIN coches co
ON en.coche_id = co.id INNER JOIN clientes cli
ON en.cliente_id = cli.id
WHERE cliente_id in
(SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');

-- #6 listar los clientes que hayan ordenado el Mercedes Ranchera
SELECT * FROM clientes WHERE id IN
(SELECT en.cliente_id FROM encargos en INNER JOIN coches co
ON en.coche_id = co.id
WHERE co.modelo = 'Mercedes Ranchera');

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN
(SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));

-- #7 sacar los vendedores con 2 o mas clientes
SELECT * FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes GROUP BY vendedor_id
HAVING COUNT(1) >= 2);

-- #8 seleccionar el grupo en el que trabaja el vendedor con mayour slario y mostrar el nombre del grupo
SELECT nombre, ciudad FROM grupos WHERE id IN
(SELECT grupo_id from vendedores WHERE sueldo = (
    SELECT MAX(sueldo) FROM vendedores
));

-- #9 listar todos los encargos realizados con la marca el coche y el nombre del cli
SELECT en.id, cli.nombre, co.marca, en.cantidad, en.fecha FROM 
encargos en, clientes cli, coches co
WHERE en.cliente_id = cli.id AND en.coche_id = co.id;

SELECT en.id, cli.nombre, co.marca, en.cantidad, en.fecha FROM 
encargos en INNER JOIN clientes cli
ON en.cliente_id = cli.id INNER JOIN coches co 
ON en.coche_id = co.id;


-- #10 listar los encargos con el nombre de coche, nombre cli, y la ciudad, pero cuando son de El Prat
SELECT en.id, cli.nombre, co.modelo, cli.ciudad, en.fecha FROM 
encargos en INNER JOIN clientes cli
ON en.cliente_id = cli.id INNER JOIN coches co 
ON en.coche_id = co.id
WHERE cli.ciudad = 'El Prat';


-- #11 sacar los vendedores que tienen jefe con el nombre del jefe
select em.nombre as empleado, em.cargo as cargo_empleado, je.nombre as jefe, je.cargo as cargo_jefe from vendedores em INNER JOIN vendedores je
ON em.jefe = je.id;

SELECT cli.nombre, COUNT(en.id) FROM clientes cli
LEFT JOIN encargos en ON cli.id = en.cliente_id
GROUP BY 1;

-- #12 crear una vista llamada vendedoresA que incluirá todos los vendedores del grupo que se llame
CREATE VIEW vendedoresA AS
select * from vendedores WHERE grupo_id in
(select id from grupos WHERE nombre = 'Vendedores A');

SELECT * FROM vendedoresA;

-- #13 seleccionar al vendedor con mas antiguedad
select * from vendedores order by fecha limit 1;

--#14 sacar los carros con + unidades vendidas
select co.modelo, count(en.id) * en.cantidad as total_vendidos 
from encargos en inner join coches co
on en.coche_id = co.id
group by en.coche_id
order by 2 desc
limit 1;

select * from coches where id in
(select coche_id from encargos having max(cantidad));

-- nota personal: las subconsultas son una buena alternativa a los joins
select * from coches where id in
 (select coche_id from encargos where cantidad in
  (select max(cantidad) from encargos));


