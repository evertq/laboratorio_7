<?php
try {
    //conexion al servidor con PDO
    $connection = new PDO("mysql:host=localhost;dbname=ever","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado exitosamente con PDO";
} catch (PDOException $e) {
    echo "La Conexion Fallo: ".$e->getMessage();
}
?>