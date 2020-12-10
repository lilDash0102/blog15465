<?php
session_start();
if(isset($_SESSION['editPass']))
{
    unset($_SESSION['editPass']);
}

if(!isset($_SESSION['editFoto']))
{
    $_SESSION['editFoto'] = true;  
}
header("Location: ../editPerfil.php");
?>