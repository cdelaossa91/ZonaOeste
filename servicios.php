<?php include("header.php"); ?>

    <!-- ****************** INDICE***************
            A. Jumbotron
            B. COntactenos
            C. Enliste su Propiedad
    
    
    *********************************************--->

 
    <!-- ************  A. Jumbotron ***********-->  
    <div class="jumbotron jumbotron-fluid text-center" id="servhero" style="height: 37rem">
       <div class="container-fluid text-white mt-xl-5">
        <h2 class="display-2 py-xl-5">Explore. Descubra. Consultenos.</h2>
        <h3 class="display-4">Lo guiaremos hasta su Hogar</h3>
        </div>
    </div>

   
       
        <!--*************B.Contactenos*********-->
     <div class="container px-lx-0 mb-4">
         <div class="container my-5 clearfix" id="contactenos">
           
          
         <a href="https://www.google.com/maps/dir//9.9355015,-84.1348705/@9.9351064,-84.1318104,17.25z"><img src="resources/mapa.PNG" class="img float-left p-5" alt="direccion"></a> 
          <h2 class="pt-5">Contactenos</h2> 
          <p> Estamos ubicados a 800mts del Rostipollos de San Rafael de Escazu.</p>
           <p><i class="fas fa-map-marker-alt"></i> Trejos Montealegre, Escazu, Costa Rica</p>
                <p><i class="fas fa-phone"></i> +506 8337-6163 | +506 8894-8504</p>
                <p><i class="fas fa-envelope"></i> info@zonaoesterealestate.com</p>
        
        </div>
        <!-- ************  C. Enliste Su Propiedad  ***********--> 
       <div id="enliste" class="container my-5" id="enliste">
           <h2>Enliste Su Propiedad</h2>
           <p class="text-justify"> Si usted es un propietario interesado en vender o alquilar su propiedad con nosotros, por favor llene el siguiente formulario con la informacion de su propiedad.</p>
           
           <form action="servicios.php" method="POST" name="solicitud" enctype="multipart/form-data">
           
              <div class="form-group m-4">
               <label for="Nombre">Nombre Completo:</label>
               <input type="text" class="form-control" id="nombre" name="nombre">
           </div>
              
                   <div class="form-group m-4">
                   <label for="Email">Correo Electronico:</label>
                   <input type="text" class="form-control" id="email" name="email">
               </div>
               
                  <div class="form-group m-4">
                   <label for="Telefono">Telefono:</label>
                   <input type="tel" class="form-control" id="telefono" name="telefono">
               </div>
              
                <div class="form-group m-4">
                 <label for="Tipo de Inmueble">Tipo de Inmueble:</label>
                  <select id="inmueble" class="form-control" name="inmueble">
                      <option value="Casa">Casa</option>
                      <option value="Apartamentos">Apartamento</option>
                      <option value="Terreno">Terreno</option>
                      <option value="Local Comercial">Local Comercial</option>
                  </select>
              </div>
                
                <div class="form-group m-4">
                 <label for="Tipo de Contrato">Tipo de Contrato:</label>
                  <select id="contrato" class="form-control" name="contrato">
                      <option value="Alquiler">Alquiler</option>
                      <option value="Venta">Venta</option>
                  </select>
              </div>
              <div class="form-group m-4">
                  <label for="Ubicacion">Ubicacion:</label>
                  <input type="text" class="form-control" id="ubicacion" name="ubicacion">
              </div>
              <div class="form-group m-4">
                  <label for="Precio">Precio Estimado:</label>
                  <input type="number" class="form-control" id="precio" name="precio">
              </div>
              <div class="form-group m-4">
               <label for="Fotos">Agregar Fotos:</label>
                 <div class="custom-file">
                  <input type="file" class="custom-file-input" name="imagen">
                  <label class="custom-file-label"></label>
                  </div>
                  
               <input class="btn btn-block btn-info
               my-5" type="submit" value="Enviar" name="enviar">
               </div>
               
           </form>
       
           <p id="result" class="mb-5"></p>
       
       
       </div>
        
        
        
        
    </div>
   
 <!--***************** PHP form********************-->
   <?php 
                
                    if(isset($_POST['enviar'])){
                  
                    include_once("resources/database/dataconfig.php");
                    
                    //fotos
                    $imagen=$_FILES['imagen']['name'];  
                    $ruta=$_FILES['imagen']['tmp_name'];
                    $destino ="resources/database/propiedadpics/solicitudes/".$imagen;
                    copy($ruta,$destino);
                      
                    
                    //solicitudes
                    $nombre = $_POST['nombre'];
                    $email = $_POST['email'];
                    $telefono = $_POST['telefono'];
                    $inmueble = $_POST['inmueble'];
                    $contrato = $_POST['contrato'];
                    $ubicacion = $_POST['ubicacion'];
                    $precio = $_POST['precio'];
                    $result = mysqli_query($connection, "INSERT INTO solicitudes(nombre,email,telefono,inmueble,contrato,ubicacion,precio,foto) VALUES ('$nombre','$email','$telefono','$inmueble','$contrato','$ubicacion', '$precio','$destino') ");
                        
                    //success message
                    echo "<div class='container alert alert-success my-2'>Su solicitud ha sido enviada satisfactoriamente. Pronto nos pondremos en contacto con usted.</div>";
                }
            
            ?>
    
   
  <?php include("footer.php"); ?>