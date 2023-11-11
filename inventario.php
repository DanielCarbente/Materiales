<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: 	#d1bfae;">
    <div class="container text-center mt-5">
        <img src="https://cdn-icons-png.flaticon.com/512/7060/7060633.png" class="mt-3" alt="" height="150" width="170">
        <h1 class="text-white mt-3">Consulta del inventario</h1>

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

        <a href="Bienvenida_Inventario.php" class="btn btn-light mt-3">Regresar a página anterior</a>
    </div>
</body>
</html>