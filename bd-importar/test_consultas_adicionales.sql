

/*Cuál es el producto que más stock tiene*/
SELECT id,nombre,max(stock) from producto;

/*Cuál es el producto más vendido.*/
SELECT id_producto, SUM(cantidad) as totalventas from venta group by id_producto order by sum(cantidad) DESC limit 1
