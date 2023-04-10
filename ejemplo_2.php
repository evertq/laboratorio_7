<?php
//conexion al servidor con objeto
$connection = new mysqli("localhost","root","","",3306);
echo "<pre>";
var_dump ($connection);
echo "</pre>";
?>