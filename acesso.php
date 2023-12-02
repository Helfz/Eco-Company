<?php
$usuario = 'if0_35539567';
$senha = 'a7tC6jecj7vrN';
$database = 'if0_35539567_login';
$host = 'sql112.infinityfree.com';
$mysqli = new mysqli($host,$usuario,$senha,$database);
$conn = mysqli_connect($host, $usuario, $senha, $database);
if($mysqli ->error){
    die("Falha ao conectar ao banco de dados: " .$mysqli->error);
}
?>
