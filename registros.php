<?php
include 'conexion.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
    <title>ENCUESTA</title>
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
        <div class="container">
            <br><div class="row">
                <div class="col-md-12">
                    <h1 class="titulo1">RESULTADO ENCUESTA DE SATISFACCIÓN</h1>
                </div>
            </div>


            <br><br><div class="row">
                <div class="col-md-4">

                    <table method="POST" class="tabla1 table table-bordered">
                            <thead>
                                <tr class="titulot1">
                                    <th  colspan="3" scope="col" id="pregunta1">PREGUNTA 1 (Atención recibida)</th>
                                </tr>

                                <?php
                                    $traer ="SELECT COUNT(*) FROM respuestas WHERE pq = 1";
                                    $resultado =mysqli_query($conexion,$traer);

                                    while ($mostrar=mysqli_fetch_array($resultado)){ ?>


                            </thead>
                            <tbody>
                                <tr>
                                    <td  colspan="3"><a href="tabla1.php">Total:<?php echo $mostrar[0]?></a></td>
                                </tr>
                            </tbody>
                            <?php }?>
                            <thead>
                                    <tr class="titulot2">
                                    <th scope="col">CALIFICACIÓN</th>
                                    <th scope="col">NÚMERO DE RESPUESTAS</th>

                                    <th></th>
                                    </tr>

                                    <?php
                                        $traer ="SELECT COUNT(*) from respuestas WHERE rp=1";
                                        $resultado =mysqli_query($conexion,$traer);
    
                                        while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                                   
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                        <td colspan="2"><a href="tabla2.php"><?php echo $mostrar[0]?></a></td>
                                    </tr>
                                    <?php } ?>
                                    <?php
                                        $traer ="SELECT COUNT(*) from respuestas WHERE rp=2";
                                        $resultado =mysqli_query($conexion,$traer);
    
                                        while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                                    <tr>
                                    <th scope="row">2</th>
                                        <td colspan="2"><a href="tabla3.php"><?php echo $mostrar[0]?></a></td>
                                    </tr>
                                    <?php } ?>
                                    <?php
                                        $traer ="SELECT COUNT(*) from respuestas WHERE rp=3";
                                        $resultado =mysqli_query($conexion,$traer);
    
                                        while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                                    <tr>
                                    <th scope="row">3</th>
                                        <td colspan="2"><a href="tabla4.php"><?php echo $mostrar[0]?></a></td>
                                    </tr>
                                    <?php } ?>
                                    <?php
                                        $traer ="SELECT COUNT(*) from respuestas WHERE rp=4";
                                        $resultado =mysqli_query($conexion,$traer);
    
                                        while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                                    <tr>
                                    <th scope="row">4</th>
                                        <td colspan="2"><a href="tabla5.php"><?php echo $mostrar[0]?></a></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                        $traer ="SELECT COUNT(*) from respuestas WHERE rp=5";
                                        $resultado =mysqli_query($conexion,$traer);
    
                                        while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                                    <tr>
                                    <th scope="row">5</th>
                                        <td colspan="2"><a href="tabla6.php"><?php echo $mostrar[0]?></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> 
                        </table>
                    </div>




                    
                    <div class="col-md-4">

                    <table class="tabla1 table table-bordered">
                            <thead>
                                <tr class="titulot1">
                                    <th  colspan="3" scope="col">PREGUNTA 2 (Solución a su requerimiento)</th>
                                </tr>

                                <?php
                                    $traer ="SELECT COUNT(*) FROM respuestas WHERE pq = 2";
                                    $resultado =mysqli_query($conexion,$traer);

                                    while ($mostrar=mysqli_fetch_array($resultado)){ ?>

                            </thead>
                            <tbody>
                                <tr>
                                    <td  colspan="3"><a href="tabla7.php">Total:<?php echo $mostrar[0]?></a></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                            <thead>
                                    <tr class="titulot2">
                                    <th scope="col">CALIFICACIÓN</th>
                                    <th scope="col">NÚMERO DE RESPUESTAS</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $traer ="SELECT COUNT(*) from respuestas WHERE rp='SI'";
                                    $resultado =mysqli_query($conexion,$traer);

                                    while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                                    <tr>
                                    <th scope="row">SI</th>
                                    <td colspan="2"><a href="tabla8.php"><?php echo $mostrar[0]?></a></td>
                                    </tr>
                                    <?php } ?>
                                    <?php
                                    $traer ="SELECT COUNT(*) from respuestas WHERE rp='NO'";
                                    $resultado =mysqli_query($conexion,$traer);

                                    while ($mostrar=mysqli_fetch_array($resultado)){ ?>
                                    <tr>
                                    <th scope="row">NO</th>
                                    <td colspan="2"><a href="tabla9.php"><?php echo $mostrar[0]?></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody> 
                        </table>
                    </div>
                <div class="col-md-4">
                    <table class="tabla1 table table-bordered">
                        <thead>
                            <tr class="titulot1">
                                <th colspan="3" cope="col">Voz del cliente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3"><a href="#"> Total: 2</a></td>
                            </tr>
                        </tbody>
                        <thead>
                                <tr class="titulot2">

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                            
                    </table>
                </div>
            </div>    
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>