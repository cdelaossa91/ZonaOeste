<?php 
session_start();
include_once("dataheader.php"); 
?>

<!DOCTYPE html>
<html>

<head>
    <title>Agregar Propiedad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container my-3">
        <a href="database.php" class="btn btn-secondary my-5">Inicio</a>
        <h3>Agregar Propiedad</h3>
        
       
        <div class="container my-5">
        
        <form action="addproperty.php" method="POST" name="nuevaPropiedad" enctype="multipart/form-data">
       
             <!-- Tabla fotos--->
                <div class="form-group mt-4">
                <label for="Imagen">Imagenes:</label>
                <input type="file" name="imagen" class="form-control-file">
            </div>
            
            <!--Ubicacion-->
                <div class="form-group mt-4">
                    <label for="Ubicacion">Ubicacion</label>
                     <textarea class="form-control" name="ubicacion" rows="2"></textarea>
            </div>
               
            <!-- Tabla infoprincipal--->
                   <div class="form-group mt-4">
                    <label for="Categoria">Categoria:</label>
                    <select name="categoria" class="form-control">
                        <option value="Alquiler">Alquiler</option>
                        <option value="Venta">Venta</option>
                    </select>
                    </div>
                    
                  
                    <div class="form-group mt-4">
                    <label for="Habitaciones">Habitaciones</label>
                    <input type="number" name="habitaciones" class="form-control">
                    </div>
                    
                      <div class="form-group mt-4">
                    <label for="Ba&ntilde;os">Ba&ntilde;os</label>
                    <input type="number" name="banos" class="form-control">
                    </div> 
                  
                    <div class="form-group mt-4">
                    <label for="Precio">Precio:</label>
                    <input type="number" name="precio" class="form-control">
                    </div>
                    
                     <!-- Tabla caracteristicas--->
                    <div class="form-group mt-4">
                        <label for="Descripcion">Descripcion:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>

                    
                    <input type="submit" name="agregar" value="Agregar" class="btn-primary btn-block my-5">
        
                       
        </form>
        </div>
    </div>

   

    <?php 
                
                    if(isset($_POST['agregar'])){
                  
                    include_once("dataconfig.php");
                    
                    //fotos
                    $imagen=$_FILES['imagen']['name'];  
                    $ruta=$_FILES['imagen']['tmp_name'];
                    $destino ="propiedadpics/".$imagen;
                    copy($ruta,$destino);
                      
                    
                    //infoprincipal
                    $categoria = $_POST['categoria'];
                    $ubicacion = $_POST['ubicacion'];
                    $habitaciones = $_POST['habitaciones'];
                    $banos = $_POST['banos'];
                    $precio = $_POST['precio'];
                    $descripcion = $_POST['descripcion'];
                    $creado= date("Y-m-d H:i:s");
                    $result = mysqli_query($connection, "INSERT INTO infoprincipal(categoria,foto,ubicacion,habitaciones,banos,precio,descripcion,creado) VALUES ('$categoria','$destino','$ubicacion','$habitaciones','$banos', '$precio', '$descripcion', '$creado') ");
                        
                    //success message
                    echo "<div class='container alert alert-success my-2'>La propiedad ha sido agregada satisfactoriamente</div>";
                }
            
            ?>



</body>


</html>


<?php include("../../footer.php"); ?>