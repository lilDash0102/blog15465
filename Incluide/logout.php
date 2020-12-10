<?php
session_start();

unset($_SESSION['usuario']);
unset($_SESSION['errorLogin']);
header("Location: ../index.php");


?>