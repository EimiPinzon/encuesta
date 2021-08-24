<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <LINK REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
    <title>TABLA 4</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="registros.php">REGISTROS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="tabla1.php">TABLA 1</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
        <br><div class="row">
                <div class="col-md-11">
                    <h1 class="titulo1">Atención recibida</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br><br><table class="tabla2 table table-bordered">
                        <thead>
                            <tr class="titulot4">
                            <th scope="col">ID</th>
                            <th scope="col">PREGUNTA (Atención recibida)</th>
                            <th scope="col">RESPUESTA</th>
                            <th scope="col">EXT</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">FECHA</th>
                            </tr>
                        </thead>

                            <?php
                                
                                $traer ="SELECT * FROM `respuestas` WHERE `preguntas` = 1";
                                $resultado =mysqli_query($conexion,$traer);

                                while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                            
                                <tbody>
                                    <tr>
                                    <td><?php echo $mostrar['id']?></td>
                                    <td><?php echo $mostrar['preguntas']?></td>
                                    <td><?php echo $mostrar['respuestas']?></td>
                                    <td><?php echo $mostrar['ext']?></td>
                                    <td><?php echo $mostrar['telefono']?></td>
                                    <td><?php echo $mostrar['fecha']?></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>