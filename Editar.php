<!DOCTYPE html>
<html>
    <head>
    <title>Editar productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
    <body style="background-color: #87D4C6;>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar producto</h4>
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
$Clave =$_POST["Clave"];
$Descripcion =$_POST["Descripcion"];
$Precio_Publico =$_POST["Precio_Publico"];
$Existencia=$_POST["Existencia"];

//preparar la consulta SQL
$consulta = $conexion->prepare("UPDATE inventario SET Descripcion= ?, Precio_Publico= ?, Existencia= ? WHERE Clave= ?");

//vincular los valores  a la consulta
$consulta->bind_param("sdis", $Descripcion,$Precio_Publico,$Existencia,$Clave);

//Establecer los valores 
$Clave =$_POST["Clave"];
$Descripcion =$_POST["Descripcion"];
$Precio_Publico =$_POST["Precio_Publico"];
$Existencia=$_POST["Existencia"];

//Ejecutar la consulta
if($consulta->execute()){
    echo '<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">                    
                    <p class="text-center">Producto actualizado correctamente</p>
                </div>    
                </div>
                </div>
           </div>';
}else{
 echo '<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">                    
                    <p class="text-center">Error al agregar el cambio del producto</p>
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
                        <a href="editar_producto.php" class="btn btn-secondary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </body>
</html>
