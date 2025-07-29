<?php
require_once 'conexao.php';


function cadastrar($conexao,$nome,$esporte_favorito,$tipo_esporte,$email,$frequencia_esporte){
    $sql="INSERT INTO enquete (nome,esporte_favorito,tipo_esporte,email,frequencia_esporte) 
    VALUES('$nome','$esporte_favorito','$tipo_esporte','$email','$frequencia_esporte')";

    mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
}

?>