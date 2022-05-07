<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Editar Productos Konecta</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<script type="text/javascript" href="js/scripts.js"></script>
</head>
<body>
<div class="degradado"></div>
<div class="contenedor-title">
	<h1>Editar Producto</h1>
</div>
<div class="agregar">	
	<a href="index.php" class="editar">volver</a>
</div>
<div class="contenedor-formulario-usuario">
<?php

    $id=$_GET['id'];
    include 'conexion1.php';
    $res = $mysqli->query("SELECT * FROM `producto` where id='$id'");
    while ($f = $res->fetch_object()) {
    ?>


    <form name="usuario" method="post" action="editar-producto.php" style="display: inline-block;width:50%">

    <input type="hidden" class="inputtexto" name="id" value="<?php echo $f->id;?>">

       <label for="">Nombre*</label>
    <input type="text" class="inputtexto" name="nombre" id="nombre" value="<?php echo $f->nombre;?>" required>

    <label for="">Referencia*</label>
    <input type="text" class="inputtexto" name="referencia" id="referencia" value="<?php echo $f->referencia;?>" required>

    <label for="">Precio*</label>
    <input type="number" class="inputtexto" name="precio" id="precio" value="<?php echo $f->precio;?>" required>

    <label for="">Peso*</label>
    <input type="number" class="inputtexto" name="peso" id="peso" value="<?php echo $f->peso;?>" required>

    <label for="">Categoria*</label>
    <input type="text" class="inputtexto" name="categoria" id="categoria" value="<?php echo $f->categoria;?>" required>

    <label for="">Stock*</label>
    <input type="number" class="inputtexto" name="stock" id="stock" value="<?php echo $f->stock;?>" required>




 	<input type="submit" name="cargar" value="Editar usuario" class="registro">
</form>


    <?php
    }
    ?>

</div>
</body>
</html>