<?php
session_start();
require_once 'incluide/filtroUser.php';
require_once 'incluide/conexion.php';
if(isset($_POST['nombre']))
{
    
    if($_POST['password'] !== $_POST['rePassword'])
    {
        $result = "Las contraseñas no coinciden";
        $color = "red";
        header("Location:registrer.php?result=".$result."&color=".$color);
    } 
    else{
        if(count(seachError()) > 0)
        {
            $error = true;
            header("Location:registrer.php");
        }
        else
        {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost'=>4]);
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellido','$correo','$password',CURDATE(),'img/Userimg/Default.png');";
            $guardar = mysqli_query($db,$sql);

           
            if($guardar)
            {
                echo "Registro completado";
                header("Location: index.php");
            }
            else
            {
                echo "Un error ha sucedido";
            }
        }
    }  
}
