<?php 
    session_start();
    include_once("dataconfig.php");
    
$id= $_GET['id'];
$result = mysqli_query($connection, "DELETE FROM infoprincipal WHERE id=$id");

header("Location: database.php");

?>