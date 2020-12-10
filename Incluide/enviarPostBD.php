<?php
include_once "conexion.php";
session_start();
$Temp = $_FILES['foto'];
$newfile = "../img/PostImg/".$Temp['name'];

if(!is_dir("../img/PostImg"))
{
    mkdir("../img/PostImg");
    
}
if(!is_dir($newfile))
{
    move_uploaded_file($Temp['tmp_name'],$newfile);
}


$id = $_SESSION['usuario']['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['textPost'];
$img = 1;
$IMGINFO = "img/PostImg/".$Temp['name'];

$Query = "INSERT INTO entradas VALUES(null,$id,'$titulo','$descripcion',CURDATE(),$img,'$IMGINFO')";

$crear = mysqli_query($db,$Query);
if($crear)
{
    $_SESSION['posting'] = "Post enviado";
    echo "Todo correcto";
}
else{
    echo "ERROR";
    echo "<br>".$db->error;
}

header("Location: ../index.php");