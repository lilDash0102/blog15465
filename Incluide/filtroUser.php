<?php

// función que retorna un vector con la lista de errores o retorna false si no encuentra un error

function seachError()
{
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $errores = array();
    if(is_numeric($nombre))
    {
        $errores['nombre'] = 'El nombre no puede contener numeros';
    }
    if(is_numeric($apellido))
    {
        $errores['apellido'] = 'El apellido no puede contener numeros';
        $_SESSION['error'] = 'El apellido no puede contener numeros';
    }
    return $errores;   
}