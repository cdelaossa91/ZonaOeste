<?php 
    session_start();
    include_once("dataconfig.php");
    
$id= $_GET['id'];
$result = mysqli_query($connection, "DELETE FROM solicitudes WHERE id=$id");

header("Location: solicitudes.php");

?>