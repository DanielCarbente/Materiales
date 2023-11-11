<!DOCTYPE html>
<html>
    <head>
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
    <body style="background-color: #C22331;>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Eliminar Usuario</h4>
                    </div>
                    <div class="card-body">
<?php
//crear una conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "materiales");

//verificar la conexion
if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}
//Establecer los valores 
$Clave =$_POST["nickname"];

//preparar la consulta SQL
$consulta = $conexion->prepare("DELETE FROM usuarios WHERE nickname= ?");

//vincular los valores  a la consulta
$consulta->bind_param("s",$Clave);

//Ejecutar la consulta

if($consulta->execute()){
    echo('<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">                    
                    <p class="text-center">Usuario Eliminado</p>
                </div>    
                </div>
                </div>
           </div>');
}else{
    echo '<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">                    
                    <p class="text-center">Error al eliminar usuario</p>
                </div>    
                </div>
                </div>
           </div>' . $consulta->error ;
}

//cerrar la conexion
$conexion->close();
?>
                        </div>
                    <div class="card-footer text-center">
                        <a href="http://localhost/Proyecto_Parcial2/Eliminar_usuario_vista.php" class="btn btn-secondary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </body>
</html>