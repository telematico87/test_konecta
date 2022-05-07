<?php 
	$id=$_GET['id'];
    include 'conexion1.php';
    $sql ="update producto set status=0 where id='$id'";

    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("producto eliminado con exito")</script>';
        echo "<script>location.href='index.php'</script>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
  mysqli_close($mysqli);
?>	