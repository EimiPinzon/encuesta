<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LOGIN</title>
</head>
<body class="login">
    <header>
    
    </header>
    <main>
        <div class="caja-login">   
            <div class="container">
                <div class="row tlogin">
                    <div class="col-md-6">
                        <h3>INGRESO</h3>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <form action="validacion.php" method="POST">
                            <div class="mb-3">
                                <label for="Usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuario" require placeholder="Ingrese su email" id="Usuario" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="contrasena" require placeholder="Ingrese su contraseña" id="contrasena">
                            </div>
                            <button class="btn-login" type="submit" class="btn btn-primary">INGRESAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>

    </footer>
</body>
</html>