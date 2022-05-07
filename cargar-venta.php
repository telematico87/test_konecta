<?php


    if (isset($_POST['cargar']))
	{
        $id=$_POST['id'];
        $cantidad=$_POST['cantidad'];

        if ( $id == '' || $cantidad == '') {
            echo '<script>alert("Porfavor llene todos los campos antes de registrar un usuario")</script>';
            echo "<script>location.href='venta.php'</script>";
            mysqli_close($mysqli);
        }
        else{
            include 'conexion1.php';
            $query="SELECT stock  FROM `producto` where status=1 and id='$id'";
           
            $res = $mysqli->query($query);
            
            if($res->num_rows==0){ 
                echo '<script>alert("No existe ese producto en almacen")</script>';
                echo "<script>location.href='venta.php'</script>";
           
            }
            while ($f = $res->fetch_object()) {
                $stock=$f->stock;
            }

            if($stock>=$cantidad){       

                $new_stock=$stock-$cantidad;
                $sql = "INSERT INTO venta(id_producto,cantidad) VALUES ('$id','$cantidad')";
                if (mysqli_query($mysqli, $sql)) {

                    $query_update="UPDATE producto set stock='$new_stock' where id='$id'";

                    if (mysqli_query($mysqli, $query_update)) {

                        echo '<script>alert("Registrado con exito")</script>';
                        echo "<script>location.href='index.php'</script>";
                    }
                } 
                else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                }
        
                mysqli_close($mysqli);

             }else{
                echo '<script>alert("No hay suficiente stock")</script>';
                echo "<script>location.href='venta.php'</script>";
                mysqli_close($mysqli); 

             }
        }


	}
?>