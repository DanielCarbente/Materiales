<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #292b2c;">
    <div class="container text-center mt-5">
        <h1 class="text-white mt-3">Usuarios Actuales</h1>

        <table class="table table-bordered table-light mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('C:\xampp\htdocs\Proyecto_Parcial2\conexionbd.php');
                $sql = "SELECT nickname FROM usuarios";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["nickname"]."</td>";                       
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
            <h1 class="text-center text-white">Eliminar el usuario por nombre</h1>
            <form action="Eliminar_usuario.php" method="post">
                <div class="form-group">
                    <label for="nickname" class="text-white">Nombre</label>
                    <input type="text" id="nickname" name="nickname" required class="form-control">
                </div>
                <input type="submit" value="Eliminar" class="btn btn-primary"><br><br><br><br>
                <a href="http://localhost/Proyecto_Parcial2/Bienvenida_usuarios.php" class="btn btn-light mt-3">Regresar a página anterior</a>
            </form>
        </div>
    </div>
</body>
</html>