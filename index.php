<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios Factory</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" href="js/scripts.js"></script>
</head>
<body>
	<div class="degradado"></div>
<div class="contenedor-title">
	<h1>Productos Konecta </h1>
</div>

<div class="agregar">	
	<a href="agregar.php" class="editar">Agregar</a>
	<a href="venta.php" class="editar">Venta</a>
</div>

<div class="venta">	
	
</div>

<div class="padre-tarjetas-usuarios columns is-multiline">
	<?php 
		include 'conexion1.php';
		$res = $mysqli->query("SELECT * FROM `producto` where status=1");
		while ($f = $res->fetch_object()) {
	?>
    <div class=" column is-one-quarter-desktop is-half-tablet">
        <div class="contenedor-tarjeta-usuario">
            <div class="contenedor-titulos-usuario">
                <h4><?php echo $f->nombre;?> </h4>
                <p> Id : <?php echo $f->id;?></p>
				<p> Stock :<?php echo $f->stock;?></p>
            </div>
            <div class="contenedor-descrip-usuario">
                <ul>
					<li class="item">Referencia : <?php echo $f->referencia;?></li>
					<li class="item">Precio : <?php echo $f->precio;?></li>
					<li class="item">Pedo : <?php echo $f->peso;?></li>
					<li class="item">Categoría : <?php echo $f->categoria;?></</li>
					<li class="item">Fecha :<?php echo $f->fecha_creacion;?></</li>

                </ul>
			</div>

			<div class="contendorbotoneditar">
				<a href="editar.php?id=<?php echo $f->id;?>" class="editar">Editar</a>
			</div>

			<div class="contendorbotoneditar">
				<a href="eliminarproducto.php?id=<?php echo $f->id;?>" class="registro">Eliminar</a>
			</div>
        </div>  
    </div>
	<?php
		}
	?>
</div>
</div>
</body>
</html>