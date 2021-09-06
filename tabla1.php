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
    <LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

    <title>Atención Recibida</title>
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
                    <a class="nav-link active" aria-current="page" href="registros.php">INICIO</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container contat4">
        <br><div class="row">
                <div class="col-md-7">
                    <h1 class="titulo1">ATENCIÓN RECIBIDA</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <br><br><table class="tabla2 table table-bordered">
                        <thead>
                            <tr class="titulot4">
                            <th scope="col">RESPUESTA</th>
                            <th scope="col">EXT</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">FECHA</th>
                            </tr>
                        </thead>

                            <?php
                                
                                $traer ="SELECT rp, ext, callerid, fecha FROM respuestas WHERE pq=1 ORDER BY rp ASC;";
                                $resultado =mysqli_query($conexion,$traer);

                                while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                            
                                <tbody>
                                    <tr>
                                    <td><?php echo $mostrar['rp']?></td>
                                    <td><?php echo $mostrar['ext']?></td>
                                    <td><?php echo $mostrar['callerid']?></td>
                                    <td><?php echo $mostrar['fecha']?></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <button type="button" class="btn btn-light"><a href="reporte1.php">DESCARGAR</a></button>  
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>