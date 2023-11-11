<!doctype html>
<html>
    <head>
        <title>Registro de usuarios nuevos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            body {
                background-color: #292b2c;
            }
            .container {
                margin-top: 100px;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <h1 class="text-center text-white">Registro de usuarios nuevos</h1>
            <form action="agregar_usuario.php" method="post">
                <div class="form-group">
                    <label for="nickname" class="text-white">Nombre</label>
                    <input type="text" id="nickname" name="nickname" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class="text-white">Contraseña</label>
                    <input type="password" id="password" name="password" required class="form-control">
                </div>
                <input type="submit" value="Registrar" class="btn btn-primary"><br><br><br><br>
                <a href="Bienvenida_usuarios.php" class="btn btn-light mt-3">Regresar a página anterior</a>
            </form>
        </div>
    </body>
    
</html>