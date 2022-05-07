<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Registro Usuarios Factory</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    
</head>
<body>
<div class="degradado"></div>
<div class="contenedor-title">
	<h1>Registrar una venta</h1>
</div>
<div class="agregar">	
	<a href="index.php" class="editar">volver</a>
</div>
<div class="contenedor-formulario-usuario" >
<form name="usuario" method="post" action="cargar-venta.php" style="display: inline-block;width:50%">
    
    <label for="">Id producto*</label>
    <input type="text" class="inputtexto" name="id" id="id">

    <label for="">Cantidad*</label>
    <input type="number" class="inputtexto" name="cantidad" id="cantidad">



    <input type="submit"  name="cargar" value="Registrar venta" class="registro"> 
</form>
</div>
</body>
</html>