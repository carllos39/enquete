<?php
require_once 'funcao_esporte.php';

$nome= $_POST['nome'];
$esporte_favorito=$_POST['esporte_favorito'];
$tipo_esporte =isset($_POST['tipo_esporte'])?$_POST['tipo_esporte'] :[];
$tipo_esporte= implode(",",$tipo_esporte);
$email=$_POST['email'];
$frequencia_esporte=$_POST['frequencia_esporte'];

cadastrar($conexao,$nome,$esporte_favorito,$tipo_esporte,$email,$frequencia_esporte);
?>