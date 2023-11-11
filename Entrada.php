<html>
    <head>
        <title>Inicio de sesión</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            body {
                background-color: #272f44;
            }
            .container {
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center text-white">Inicio de sesión</h1>
            <form method="post">
                <div class="form-group">
                    <label for="nickname" class="text-white">Usuario:</label>
                    <input type="text" id="nickname" name="nickname" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class="text-white">Contraseña:</label>
                    <input type="password" id="password" name="password" required class="form-control">
                </div>
                <center> <input type ="submit" value="Inicia sesión" class="btn btn-primary"></center>
            </form>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "materiales";

            //crear conexion
            $conn = new mysqli($servername,$username,$password,$dbname);

            //verficar conexion
            if ($conn->connect_error){
                die ("Conexión fallida:". $conn->connect_error);
            }

            //Obtener los valores ingresados por el usuario
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $nickname = $_POST['nickname'];
                $password = $_POST['password'];

                //Consultar la base de datos para verificar si el usuario existe
                $sql = "SELECT * FROM usuarios WHERE nickname = '$nickname' AND password = '$password' ";
                $result = $conn->query($sql);

                //Verificar si se encontro algun resultado
                if ($result->num_rows > 0){
                    echo '¡Inicio de sesion exitoso';
                    header('Location: Bienvenida.php/');
                    exit;

                }else{
                    echo 'Usuario no encontrado';
                    header('Location: Salida_F.php/');
                    exit;
                }

            }

            //Cerrar conexion
            $conn->close();
            ?>
        </div>
    </body>
</html>