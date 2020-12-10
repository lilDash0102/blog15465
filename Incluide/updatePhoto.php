<?php
require_once 'conexion.php';
session_start();
$tmpFoto = $_FILES['newFoto'];
var_dump($tmpFoto);
$fileName = "../img/UserImg/".$_SESSION['usuario']['id'];
if(!is_dir($fileName))
{
    mkdir($fileName,0700);
}

move_uploaded_file($tmpFoto['tmp_name'],"../img/UserImg/".$_SESSION['usuario']['id'].'/'.$tmpFoto['name']);
$nombre = $tmpFoto['name'];
$url = "img/UserImg/".$_SESSION['usuario']['id'].'/'.$nombre;
$QUERY2 = "UPDATE usuarios SET urlFoto = '$url' WHERE id =".$_SESSION['usuario']['id'];
$guardar = mysqli_query($db,$QUERY2);

if($guardar)
{
    echo "Registro completado";
    $_SESSION['usuario']['urlFoto'] = $url;
}else
{
    echo "Un error ha sucedido";
    var_dump($guardar);
    echo $db->error;
}
header("Location: ../editPerfil.php");