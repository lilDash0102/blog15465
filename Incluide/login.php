<?php

include 'conexion.php';
session_start();
$_SESSION['prueba'] = " esto es una prueba";
if (isset($_POST)) {
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 4]);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        $usuario = mysqli_fetch_assoc($result);
        var_dump($usuario);
        if ($usuario != null) {
            if (password_verify($pass, $usuario['password'])) {
                $_SESSION['usuario'] = $usuario;
            } else {
                $_SESSION['errorLogin'] = "contraseña incorrecta";
            }
        }
        else{
            $_SESSION['errorLogin'] = "correo no encontrado";
        }
    } else {
        $_SESSION["error"] = "error en la consulta";
    }
} else {
    echo "error post";
}
header("Location: ../index.php");

