<?php 
session_start();
include_once("dataconfig.php"); 
$result= mysqli_query($connection, "SELECT * FROM infoprincipal ORDER BY id DESC");
include_once("../../header.php");
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>ZonaOeste Base de Datos</title>
            
        </head>
        
        <body>
            <div class="container">
            <h3>Base de Datos</h3>
            
            <h4>Informacion de Propiedades</h4>
            <a href="addproperty.php" class="btn btn-secondary my-2">Agregar Propiedad</a>
            <table class="table">
            
     
                
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Categoria</th>
                <th>Ubicacion</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Creado en:</th>
            </tr>
            <?php  
                while($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td><img src='".$user_data['foto']."'width='200px'></td>";
                    echo "<td>".$user_data['categoria']."</td>";
                    echo "<td>".$user_data['ubicacion']."</td>";
                    echo "<td>".$user_data['descripcion']."</td>";
                    echo "<td>".$user_data['precio']."</td>";
                    echo "<td>".$user_data['creado']."</td>";
                    echo "<td><a href='editproperty.php?id=$user_data[id]'>Editar</a> | <a href='deleteproperty.php?id=$user_data[id]'>Eliminar</a></td></tr>"; 
                }
            
            ?>
        
            </table>
            </div>
            
        
        </body>
        
</html>



