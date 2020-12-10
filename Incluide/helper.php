<?php
include_once "conexion.php";

function posting()
{
    global $db;
    $Query = "SELECT * FROM entradas";
    $result = mysqli_query($db,$Query);

    $return = "";
    while($post = mysqli_fetch_assoc($result))
    {
        $titulo = $post['titulo'];
        $usuario = serachForId($post['usuario_id']);
        $fotouser = $usuario['urlFoto'];
        $username = $usuario['nombre'];
        echo  "<h2 class='ml-4  mt-5 text-info font-weight-bold' style='width: 100%; text-align: center;'>".$titulo."</h2>";
        echo  "<img src='".$post['ImgUrl']."'style='width: 100%; class=img-fluid'>";
        echo  "<div class='container ml-2 mr-2'>";
        echo  "<div class= 'd-inline-flex w-100'>";
        echo  "<img src='$fotouser'  class='img-fluid rounded-circle' style='width: 100px; height: 100px; margin-top: 5%;'>";
        echo  "<p style='margin-top: 9%; margin-left: 5%;text-align: center; align-items: center; font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;'>".$username."</p>";
        echo  "<p style='margin-top: 9%; margin-left: 5%;text-align: center; align-items: center; font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;'>".'Fecha: - '.$post['fecha']."</p>";
        echo  "</div>";
        echo  "<p style='margin-top: 5%;'>".$post['descripcion']."</p></div>";
    }


}

function serachForId($id)
{
    global $db;
    $query = "SELECT * FROM usuarios WHERE id = '$id'";
    $result = mysqli_query($db,$query);
    $resultreal = mysqli_fetch_assoc($result);
    return $resultreal;
}
?>
<style>
    h1{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-top: 5px;
        align-items: center;
    }

</style>

