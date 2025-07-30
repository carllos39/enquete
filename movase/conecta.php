<?php 
$servidor="localhost";
$usuario="root";
$senha ="";
$banco="contato";
$conexao = new mysqli($servidor,$usuario,$senha,$banco);
//Caracteres 
mysqli_set_charset($conexao,"UTF8");
date_default_timezone_set("America/Sao_Paulo" );
//Verificando erro de conexão
if(mysqli_connect_error()){
    die("Erro ao conectar".mysqli_connect_error());
}

?>