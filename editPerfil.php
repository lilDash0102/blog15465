<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <!-- CABEZERA   -->
    <?php  require_once "incluide/header.php"; session_start();?>

    <!-- CONTENIDO -->
    <div class="border d-inline-flex" style="width: 100%; ">
        <div style="width: 30%; margin-top: 5%;" class="border display: block;">
            <img src="<?= $_SESSION['usuario']['urlFoto']; ?>" class="img-fluid rounded-circle" style="margin-bottom: 5%; width: 200px; height: 200px; margin-top: 5%; margin-left: 50%; transform: translateX(-50%);">
            <p style="text-align: center;" class="m-4">Hola, <strong><?= $_SESSION['usuario']['nombre']?></strong></p>
            <div class="w-100">
            <a href="incluide/HabilitarFoto.php" class="" style="display: block; text-align: center; margin-top: 5%;">Editar foto</a>
            </div>
            
            <div class="w-100">
            <a href="" style="display: block; text-align: center;">Cambiar contraseña</a>
            </div>
            <div class="w-100">
            <a href="incluide/habilitarGeneral.php" style="display: block; text-align: center;">Editar perfil</a>
            </div>
            
            
            
        </div>

        <!-- Cuadro de información dinamico -->
        <div style="width: 70%; margin-top: 5%;" class="border">
            
        <?php 
        if(isset($_SESSION['editFoto']))
        {
            require_once "incluide/editarFoto.php";
            
        }
        else if(isset($_SESSION['editPass']))
        {

        }
        else{
            require_once "incluide/editarPerfilGeneral.php";      
      }
        ?>       

        </div>
    </div>

    <!-- FOOTER -->
    <?php require_once "incluide/footer.php"?>
</body>

</html>
