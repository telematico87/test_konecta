<?php


    if (isset($_POST['cargar']))
	{
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $referencia=$_POST['referencia'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $categoria=$_POST['categoria'];
        $stock=$_POST['stock'];

        if (  $nombre == '' || $referencia == '' || $peso == '' || $categoria == ''|| $stock == '' || $precio == '') {
            echo '<script>alert("Porfavor llene todos los campos antes de registrar un usuario")</script>';
            echo "<script>location.href='editar.php?id=$id'</script>";
            mysqli_close($mysqli);
        }
        else{
        include 'conexion1.php';

        $sql = "UPDATE producto SET nombre='$nombre', referencia='$referencia', precio='$precio', peso='$peso', categoria='$categoria', stock='$stock' where id='$id'";
        if (mysqli_query($mysqli, $sql)) {
            echo '<script>alert("Registrado editado con exito")</script>';
            echo "<script>location.href='index.php'</script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
        mysqli_close($mysqli);
        }

	}
?>