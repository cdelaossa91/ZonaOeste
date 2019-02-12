<?php
 $databaseHost='localhost';
 $databaseName='zonaoeste';
 $databaseUsername='root';
 $databasePassword='';

    $connection=mysqli_connect($databaseHost,$databaseUsername,$databasePassword, $databaseName);

    if (!$connection){
        die("Connection failed:".mysqli_connect_error());
    }

?>