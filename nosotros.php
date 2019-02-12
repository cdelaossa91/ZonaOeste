<?php include("header.php"); ?>

   
   
<!-- ************* INDICE***********
    A. Jumbotron
    B. Propiedades Destacadas
    C. Quienes Somos
        1. Descripcion
        2. Equipo Cards
    D. Servicios
        1. Alquiler
        2. Venta
        3. Asesoria Legal
        4. Asesoria Bancaria

    ********************************-->



<main>


<!-- ******************* A. Jumbotron ***************-->
 <div class="jumbotron jumbotron-fluid text-center mb-5" id="homehero" style="height: 37rem">
       <div class="container-fluid text-white mt-xl-5">
        <h2 class="display-2 py-xl-5">Explore. Descubra. Consultenos.</h2>
        <h3 class="display-4">Lo guiaremos hasta su Hogar</h3>
        </div>
    </div>
   
   
        
    
    
      
    <!-- ****************** B. Propiedades Destacadas *******-->  
<div class="container my-5 py-5">
    <h2 class="text-center my-5 text-secondary">Busquedas Frecuentes</h2>
    <div class="row shadow py-3">
        <div class="col-sm-3">
            <div class="card text-white">
                <a href="propiedades.php"><img src="resources/casa.jpg" class="card-img " alt="Casas"></a>
                <div class="card-img-overlay">
                     <h2 class="card-title text-center text-light">Casas</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white">
                <a href="propiedades.php"> <img src="resources/apartamento.jpg" class="card-img" alt="Apartamentos"></a>
                <div class="card-img-overlay">
                <h2 class="card-title text-center text-light">Apartamentos</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white">
               <a href="propiedades.php"> <img src="resources/local.jpg" class="card-img" alt="Locales Comerciales"></a>
                <div class="card-img-overlay">
                <h2 class="card-title text-center text-light">Locales Comerciales</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white">
               <a href="propiedades.php"> <img src="resources/terreno.jpg" class="card-img" alt="Terrenos"></a>
                <div class="card-img-overlay">
                <h2 class="card-title text-center text-light">Terrenos</h2>
                
            </div>
        </div>
    </div>
</div>
    </div>
   <!-- ******************* C. Quienes Somos ***************-->
    <!-- ******************* 1. Descripcion ***************-->   
     <div class="container px-lx-0 mb-4">
    <div id="quiensomos">
        <h1>Quienes Somos</h1>
        <br>
        <p>Somos una empresa de bienes raíces especializada en brindar asesoría para la compra,
        venta o alquiler de propiedades en la zona oeste del GAM, contamos con 8 años de
        experiencia en el mercado inmobiliario.</p>
        
        <p>Nuestros profesionales con amplio conocimiento del mercado, comprometidos en guiar y
        acompañar durante todo el proceso a nuestros clientes para satisfacer sus necesidades y
        procurar una excelente experiencia inmobiliaria.</p>
        

    </div>

         <!-- ******************* 2. Equipo Cards ***************-->      
        <div class="container">        
               <div class="card-deck m-5">
               <div class="card m-4">
                <img src="resources/femexample.jpg" alt="JackelineMurillo" class="card-img-top img-fluid ">
                   
                       <div class="card-body text-center">
                        <h4 class="card-title">Jackeline Murillo</h4>
                        <p class="card-text lead">Propietaria</p>
                        <p class="card-text text-secondary">Telefono: +506 8894 8504</p>
                        <hr>
                        <p class="card-text text-justify">Lorem ipsizzle dolizzle tellivizzle amizzle, pimpin' pizzle nizzle. Nullizzle black velizzle, yo shiznit, suscipit stuff, gravida vel, sheezy. Break yo neck, yall eget tortizzle. Sure erizzle. That's the shizzle doggy dolor dapibizzle turpis tempizzle mofo. Maurizzle shizzlin dizzle shit izzle sure. Praesent nec turpis izzle leo fizzle molestie. Vivamus vestibulizzle daahng dawg shiznit pimpin'.</p>
                        </div>
             
            </div>
    
            
                <div class="card m-4">
                <img src="resources/malexample.jpg" alt="MarcoDeLaOssa" class="card-img-top img-fluid">
                   <div class="card-body text-center">
                    <h4 class="card-title">Marco De La Ossa</h4>
                    <p class="card-text lead">Propietario</p>
                    <p class="card-text text-secondary">Telefono: +506 8337 6163</p>
                    <hr>
                    <p class="card-text text-justify">Lorem ipsizzle dolizzle tellivizzle amizzle, pimpin' pizzle nizzle. Nullizzle black velizzle, yo shiznit, suscipit stuff, gravida vel, sheezy. Break yo neck, yall eget tortizzle. Sure erizzle. That's the shizzle doggy dolor dapibizzle turpis tempizzle mofo. Maurizzle shizzlin dizzle shit izzle sure. Praesent nec turpis izzle leo fizzle molestie. Vivamus vestibulizzle daahng dawg shiznit pimpin'.</p>
                   </div>
           
        </div>
          </div>
            </div>
            
            
            
            
            <!--************************ D. Servicios ********************-->
            <div id="servicios">
           <h2>Nuestros Servicios</h2>
           <br>
           <div class="container pb-4">
             <div class="card-deck mb-5">
                 
                 
                    <!-- ************  1. Alquiler  ***********-->  
                   <div class="card" name="alquiler">
                    <img src="resources/rent.jpg" alt="Alquiler" class="card-img-top img-fluid">
                    <div class="card-body text-center">
                        <h4>Alquiler</h4>
                        <hr>
                            <p class="card-text text-justify">Para el arrendador: Le ofrecemos las mejores opciones inmobiliarias en la zona, con
                                precios competitivos que se ajusten a sus necesidades. </p>
                            <p class="card-text text-justify"> Para el arrendante: Le acompañamos y asesoramos en el proceso del alquiler de su
                            propiedad, procurando la búsqueda de un buen inquilino y así su experiencia sea
                            gratificante.</p>
                    </div>
                     
                     
                 </div>
                 
                 
                 <!-- ************  2. Venta ***********--> 
                 <div class="card" name="venta">
                     <img src="resources/sell.jpg" alt="Venta" class="card-img-top img-fluid">
                     <div class="card-body text-center">
                         <h4>Venta</h4>
                         <hr>
                         <p class="card-text text-justify">Comprador: Trabajamos para ofrecerle las mejores opciones del mercado para la
                            adquisición del inmueble que se ajuste a sus necesidades y presupuesto, y le asesoramos en
                            todo el proceso desde búsqueda inicial hasta la firma de la escritura de compra.</p>
                        <p class="card-text text-justify">Vendedor: Nuestro compromiso es poner toda nuestra experiencia y recursos disponibles,
                        para promocionar su propiedad de forma competitiva en el mercado inmobiliario, y así
                        procurar una venta oportuna y gratificante.</p>
                     </div>
                     
                     
                     
                 </div>
             </div>
               <div class="card-deck mb-5">
                  
                  <!-- ************  3. Asesoria Legal  ***********--> 
                   <div class="card" name="Legal">
                       <img src="resources/asesoria.jpg" alt="Asesoria" class="card-img-top img-fluid">
                       <div class="card-body text-center">
                           <h4>Asesoria Legal</h4>
                           <hr>
                           <p class="card-text text-justify">Nuestra empresa cuenta con la alianza con     profesionales en Derecho de larga trayectoria,
                            los cuales podrán brindar asesoría en el proceso en caso que se requiera.</p>
                       </div>
                       
                   </div>
                   
                    <!-- ************4. Asesoria Bancaria  ***********--> 
                   <div class="card" name="Bancario">
                       <img src="resources/bank.jpg" alt="Bancario" class="card-img-top img-fluid">
                       <div class="card-body text-center">
                           <h4>Proceso de Tramites Bancarios</h4>
                           <hr>
                           <p class="card-text text-justify">
                               Nuestra empresa le guiará y acompañará durante el proceso de trámite bancario para la
                                compra de su propiedad, así mismo le pondremos en contacto con ejecutivo del banco de su
                                preferencia para gestionar su crédito bancario.
                           </p>
                       </div>
                   </div>
                   
                   
               </div>
           </div>
           
       </div>
       
</main>



<?php include("footer.php"); ?>