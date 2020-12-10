<?php
session_start();
if(isset($_SESSION['editFoto']))
{
    unset($_SESSION['editFoto']);
    var_dump($_SESSION['editFoto']);
}

if(isset($_SESSION['editPass']))
{
    unset($_SESSION['editPass']);
}
header("Location: ../editPerfil.php");

?>

