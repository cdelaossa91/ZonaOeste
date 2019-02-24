<?php 
include("header.php"); 
include_once("resources/database/dataconfig.php"); 
$result= mysqli_query($connection, "SELECT * FROM infoprincipal ORDER BY id DESC");
?>




 <div class="jumbotron jumbotron-fluid text-center mb-5" id="prophero" style="height: 37rem">
       <div class="container-fluid text-white mt-xl-5">
        <h2 class="display-2 py-xl-5">Explore. Descubra. Consultenos.</h2>
        <h3 class="display-4">Lo guiaremos hasta su Hogar</h3>
        </div>
    </div>

<div class="container">
    <h2>Propiedades</h2>
      <div class="card-deck my-5"> 
     
            
     <?php  
        while($user_data = mysqli_fetch_array($result)) {
        echo "<div class='card'>";
        echo "<img src='resources/database/".$user_data['foto']."' width='200px' class='card-img-top img-fluid'>";
        echo "<div class='card-header text-center'>".$user_data['categoria']."</div>";
        echo "<div class='card-body'>";
        echo "<ul class='list-group list-group-flush'>";
        echo "<li class='list-group-item'>".$user_data['ubicacion']."</li>";
        echo "<li class='list-group-item text-center'><i class='fas fa-home'></i> ".$user_data['habitaciones']." <i class='fas fa-bath'></i> ".$user_data['banos']."</li>";
        echo "<li class='list-group-item'><p>".$user_data['descripcion']."</p></li>";
        echo "<li class='list-group-item'>Precio: $".$user_data['precio']."</li>";
        echo "</ul>";
        echo "</div>";  
        echo "</div>";    
            if($user_data['id'] % 5 ==+ 0){
                echo "</div><div class ='card-deck my-5'>";
            }
        }
            
    ?>
        
</div> 
</div>
   
   
   
   
   

<?php include("footer.php"); ?>