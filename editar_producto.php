<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #efa94a;">
    <div class="container text-center mt-5">
        <h1 class="text-white mt-3">Inventario Actual</h1>

        <table class="table table-bordered table-light mt-3">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th>Precio Público</th>
                    <th>Existencia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('C:\xampp\htdocs\Proyecto_Parcial2\conexionbd.php');
                $sql = "SELECT Clave, Descripcion, Precio_Publico, Existencia FROM inventario";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["Clave"]."</td>";
                        echo "<td>".$row["Descripcion"]."</td>";
                        echo "<td>".$row["Precio_Publico"]."</td>";
                        echo "<td>".$row["Existencia"]."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 Resultados</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>

        <div class="container">
            <h1 class="text-center text-white">Edicion de inventario</h1>
            <form action="Editar.php" method="post">
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
                    <input type="Existencia" id="password" name="Existencia" required class="form-control">
                </div>
                <input type="submit" value="Actualizar" class="btn btn-primary"><br><br><br><br>
                <a href="Bienvenida_Productos.php" class="btn btn-light mt-3">Regresar a página anterior</a>
            </form>
        </div>
    </div>
</body>
</html>