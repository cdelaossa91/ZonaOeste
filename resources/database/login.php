<?php
session_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet">
    <title>Zona Oeste Real Estate</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--<script src="resources/jquery.js"></script>
    <script src="resources/effects.js"></script>   -->
    
    <link rel="stylesheet" href="resources/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>


<body>
<div class="container">
   <h2 class="display-2 text-center my-5">Login</h2>
   
    <form role="form" name="login" method="POST" action="session/login.php">
        <div class="form-group my-5">
            <p id="alerta"></p>
            <input type="text" class="form-control my-5" placeholder="Nombre de Usuario" name="username">
            <input type="password" class="form-control my-5" placeholder="Contrase&ntilde;a" name="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block my-5" name="acceder">Acceder</button>
    </form>
</div>

<footer>
<div class="container-fluid text-center text-light bg-dark mb-0 fixed-bottom" id="copyright">
           <div class="container py-2">
            <p><small>Zona Oeste Real Estate | Derechos Reservados 2019 | Desarrollado por Carolina De La Ossa </small>
            </p>
            </div>
        </div> 
</footer>  
    </body>
</html>