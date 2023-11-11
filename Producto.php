<!doctype html>
<html>
    <head>
        <title>Registro de productos nuevos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            body {
                background-color: #efa94a;
            }
            .container {
                margin-top: 100px;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <h1 class="text-center text-white">Registro de productos nuevos</h1>
            <form action="agregar_producto.php" method="post">
                <div class="form-group">
                    <label for="Clave" class="text-white">Clave</label>
                    <input type="text" id="Clave" name="Clave" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="Descripcion" class="text-white">Descripcion</label>
                    <input type="Descripcion" id="Descripcion" name="Descripcion" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="Precio_Publico" class="text-white">Precio Publico</label>
                    <input type="Precio_Publico" id="Precio_Publico" name="Precio_Publico" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="Existencia" class="text-white">Existencia</label>
                    <input type="text" id="Existencia" name="Existencia" required class="form-control">
                </div>
                <input type="submit" value="Registrar" class="btn btn-primary"><br><br><br><br>
                <a href="http://localhost/Proyecto_Parcial2/Bienvenida_Productos.php" class="btn btn-light mt-3">Regresar a página anterior</a>
            </form>
        </div>
    </body>
    
</html>