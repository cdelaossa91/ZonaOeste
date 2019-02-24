<?php 
session_start();
include_once("dataheader.php"); 
include_once("dataconfig.php"); 
$result= mysqli_query($connection, "SELECT * FROM solicitudes ORDER BY id DESC");
?>




        <body>
            <div class="container">
            <h3 class="my-4">Base de Datos</h3>
            
            <h4 class="my-4">Solicitudes de Propietarios</h4>
            
            <table class="table">            
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Inmueble</th>
                <th>Contrato</th>
                <th>Ubicacion</th>
                <th>Precio</th>
                
            </tr>
            <?php  
                while($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td><img src='../../".$user_data['foto']."'width='200px'></td>";
                    echo "<td>".$user_data['nombre']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['telefono']."</td>";
                    echo "<td>".$user_data['inmueble']."</td>";
                    echo "<td>".$user_data['contrato']."</td>";
                    echo "<td>".$user_data['ubicacion']."</td>";
                    echo "<td>$".$user_data['precio']."</td>";
                    echo "<td><a href='deletesolicitud.php?id=$user_data[id]'>Eliminar</a></td></tr>"; 
                }
            
            ?>
        
            </table>
            </div>
            
        
        </body>
        
</html>

