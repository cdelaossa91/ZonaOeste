<?php  
session_start();
 include_once("dataheader.php");
    include_once("dataconfig.php");
                $id= $_GET['id'];
                $result = mysqli_query($connection, "SELECT * FROM infoprincipal WHERE id=$id");

    
                while($user_data = mysqli_fetch_array($result)){

                    $categoria = $user_data['categoria'];
                    $ubicacion = $user_data['ubicacion'];
                    $habitaciones = $user_data['habitaciones'];
                    $banos = $user_data['banos'];
                    $precio = $user_data['precio'];
                }
    
                if (isset($_POST['editar'])){
                    
                    $id=$_POST['id'];
                    $categoria=$_POST['categoria'];
                    $ubicacion=$_POST['ubicacion'];
                    $habitaciones=$_POST['habitaciones'];
                    $banos=$_POST['banos'];
                    $precio=$_POST['precio'];


                    $result = mysqli_query($connection, "UPDATE infoprincipal SET categoria='$categoria',  ubicacion='$ubicacion', habitaciones= '$habitaciones',banos = '$banos', precio='$precio' WHERE id=$id");
                    header("Location:editproperty.php");
                  
                }
 
?>

<!DOCTYPE html>
<html>
<header>
    <title>Editar Propiedad</title>
</header>

<body>

    <div class="container mt-3">
        <a href="database.php" class="btn btn-secondary my-5">Inicio</a>
        <h3>Editar Propiedad</h3>

        <div class="container">

            <form name="editar" method="POST" action="editproperty.php">

                <div class="form-group mt-4">
                    <label for="Categoria">Categoria:</label>
                    <select name="categoria" class="form-control">
                        <option value="alquiler">Alquiler</option>
                        <option value="venta">Venta</option>
                    </select>
                </div>
                <div class="form-group mt-4">
                    <label>Ubicacion:</label>
                    <input type="text" name="ubicacion" class="form-control" value="<?php echo $ubicacion;?>">
                </div>
                 <div class="form-group mt-4">
                    <label for="Habitaciones">Habitaciones</label>
                    <input type="number" name="habitaciones" class="form-control" value="<?php echo $habitaciones; ?>">
                    </div>
                      <div class="form-group mt-4">
                    <label for="Ba&ntilde;os">Ba&ntilde;os</label>
                    <input type="number" name="banos" class="form-control" value= "<?php echo $banos; ?>">
                    </div> 
                <div class="form-group mt-4">
                    <label>Precio:</label>
                    <input type="number" name="precio" class="form-control" value="<?php echo $precio; ?>">
                </div>
                <input type="submit" name="editar" value="Editar" class="btn btn-dark btn-block">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

            </form>
        </div>
    </div>
</body>


</html>


<?php include("../../footer.php"); ?>