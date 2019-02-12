<?php include("header.php"); ?>

    <!-- ****************** INDICE***************
            A. Jumbotron
        
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
         <div class="container my-5 clearfix">
           
          
         <a href="https://www.google.com/maps/dir//9.9355015,-84.1348705/@9.9351064,-84.1318104,17.25z"><img src="resources/mapa.PNG" class="img float-left p-5" alt="direccion"></a> 
          <h2 class="pt-5">Contactenos</h2> 
          <p> Estamos ubicados a 800mts del Rostipollos de San Rafael de Escazu.</p>
           <p><i class="fas fa-map-marker-alt"></i> Trejos Montealegre, Escazu, Costa Rica</p>
                <p><i class="fas fa-phone"></i> +506 8337-6163 | +506 8894-8504</p>
                <p><i class="fas fa-envelope"></i> info@zonaoesterealestate.com</p>
        
        </div>
        <!-- ************  C. Enliste Su Propiedad  ***********--> 
       <div id="enliste" class="container my-5">
           <h2>Enliste Su Propiedad</h2>
           <p class="text-justify"> Si usted es un propietario interesado en vender o alquilar su propiedad con nosotros, por favor llene el siguiente formulario con la informacion de su propiedad.</p>
           
           <form>
           <div class="form-group m-4">
               <label for="Nombre">Nombre Completo:</label>
               <input type="text" class="form-control" id="nombre">
           </div>
               <div class="form-group m-4">
                   <label for="Email">Correo Electronico:</label>
                   <input type="text" class="form-control" id="email">
               </div>
               <div class="form-group m-4">
                   <label for="Telefono">Telefono:</label>
                   <input type="tel" class="form-control" id="telefono">
               </div>
              <div class="form-group m-4">
                 <label for="Tipo de Inmueble">Tipo de Inmueble:</label>
                  <select name="" id="inmueble" class="form-control">
                      <option>Casa</option>
                      <option>Apartamento</option>
                      <option>Terreno</option>
                      <option>Local Comercial</option>
                  </select>
              </div>
              <div class="form-group m-4">
                  <label for="Ubicacion">Ubicacion:</label>
                  <input type="text" class="form-control" id="ubicacion">
              </div>
              <div class="form-group m-4">
                  <label for="Precio">Precio Estimado:</label>
                  <input type="number" class="form-control" id="precio">
              </div>
              <div class="form-group m-4">
               <label for="Fotos">Agregar Fotos:</label>
                 <div class="custom-file">
                  <input type="file" class="custom-file-input">
                  <label class="custom-file-label"></label>
                  </div>
                  
               <button class="btn btn-block btn-info
               my-5" onclick="enlistar()">Enviar</button>
               </div>
               
           </form>
       
           <p id="result" class="mb-5"></p>
       
       
       </div>
        
        
        
        
    </div>
   
    <script type="text/javascript">
        var nombre;
        var email;
        var telefono;
        var ubicacion;
        var precio;
        var result;
        
        function enlistar(){
            nombre=document.getElementById('nombre').value;
            email=document.getElementById('email').value;
            telefono=document.getElementById('telefono').value;
            ubicacion=document.getElementById('ubicacion').value;
            precio=document.getElementById('precio').value;
            result= document.getElementById('result');
            
            if(nombre!="" && email!="" && telefono!="" && ubicacion!=""
              && precio!=""){
                 result.innerHTML="Su formulario ha sido enviado satisfactoriamente";   
               } else {
                result.innerHTML="Favor llene todos los campos";
            }
        }
        
        
    </script>
 
    
   
  <?php include("footer.php"); ?>