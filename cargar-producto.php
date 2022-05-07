<?php


    if (isset($_POST['cargar']))
	{
        $nombre=$_POST['nombre'];
        $referencia=$_POST['referencia'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $categoria=$_POST['categoria'];
        $stock=$_POST['stock'];
     
        if ( $nombre == '' || $referencia == '' || $peso == '' || $categoria == ''|| $stock == '' || $precio == '') {
            echo '<script>alert("Porfavor llene todos los campos antes de registrar un usuario")</script>';
            echo "<script>location.href='agregar.php'</script>";
            mysqli_close($mysqli);
        }
        else{
            include 'conexion1.php';

            $sql = "INSERT INTO producto(nombre,referencia,precio,peso,categoria,stock,status) VALUES ('$nombre','$referencia','$precio',
            '$peso','$categoria','$stock','1')";
            if (mysqli_query($mysqli, $sql)) {
                echo '<script>alert("Registrado con exito")</script>';
                echo "<script>location.href='index.php'</script>";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
            }
    
          mysqli_close($mysqli);
        }


	}
?>