<?php
$servidor="localhost";//127.0.0.1
$usuario="root";
$contrasenia="";

try{
$conexion=new PDO("mysql:host=$servidor;dbname=redflag",$usuario,$contrasenia);
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo"Conexion establecida";

}catch(PDOException $error){
    echo "Conexion error". $error;
}

?>