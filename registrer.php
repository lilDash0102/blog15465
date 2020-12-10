<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once "incluide/header.php"; ?>

    <form action="crearUsuario.php" method="POST" class="form-group mt-5">

        <h4 class="text-center">Formulario</h4>

        
        <?php if(isset($_SESSION['error'])): echo 
        "<h5 class='font-weight-bold' style='color: red; text-align: center; margin-top: 3%;'>".$_SESSION['error']."</h5>"; endif;?>
        <div class="w-100">
        <input type="text" class="w-50 text-center" style="margin-left: 50%; transform: translateX(-50%); margin-top: 4%;" name="nombre" placeholder="Ingresé su nombre">
        </div>
        

        <input type="text" class="w-50 text-center" style="margin-left: 50%; transform: translateX(-50%);  margin-top: 2%;" name="apellido" placeholder="Ingresé su apellido">


        <input type="email" class="w-50 text-center" style="margin-left: 50%; transform: translateX(-50%); margin-top: 2%;" name="correo" placeholder="Ingresé su correo">


        <input type="password"  class="w-50 text-center" style="margin-left: 50%; transform: translateX(-50%); margin-top: 2%;" name="password" placeholder="Ingresé su contraseña">


        <input type="password" class="w-50 text-center" style="margin-left: 50%; transform: translateX(-50%); margin-top: 2%;" name="rePassword" placeholder="Ingresé su confirmación de contraseña">

        <div style="margin-left: 10%; margin-right: 10%; width: 80%; text-align: center; margin-top: 5%;">
            <input type="submit" class="btn-success w-25" style="margin-left: 50%; transform: translateX(-50%);" value="Registrar">
        </div>

    </form>

    <?php require_once "incluide/footer.php" ?>
</body>

</html>