<?php

$hostname = "localhost";
$bancodedados = "usuários";
$usuario = 'root';
$senha = "";

$mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);
if($mysqli-> connect_errno){
    echo "Falha ao conectar";
}


?>