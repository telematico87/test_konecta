# test konecta
1. El test esta implementado en PHP Nativo la versiones que soporta PHP 5, PHP 7.
2. Ejecutar el script bd-importar/test_konecta.sql, en la base de datos test_konecta
3. Las consultas adicionales bd-importar/test_consultas_adicionales.sql:
  -/*Cuál es el producto que más stock tiene*/
  - SELECT id,nombre,max(stock) from producto;

  -Cuál es el producto más vendido.*/
  - SELECT id_producto, SUM(cantidad) as totalventas from venta group by id_producto order by sum(cantidad) DESC limit 1
                                                                                                                                                                                                                                                                                                                                 
- el sistema crud 
![sistema_php_konecta](https://user-images.githubusercontent.com/13879086/167273895-cbbeeba5-d58d-4db6-bdd6-153abac7105e.png)
