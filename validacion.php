<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Encuesta Satisfación</title>
</head>
<body>
    

<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion =new mysqli('localhost','root','','encuesta');

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado =mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if ($filas){
    include ("registros.php");
}else{
    ?>
    <?php
    include("index.php");

    echo "<script> alert('Usuario o contraseña incorrectos')
    window.location = 'index.php';
    </script>";
    ?>

    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>

</body>
</html>