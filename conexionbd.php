<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "materiales";

            //crear conexion
            $conn = mysqli_connect($servername,$username,$password,$dbname);

            //verficar conexion
            if ($conn->connect_error){
                die ("Conexión fallida:". $conn->connect_error);
            }
            ?>