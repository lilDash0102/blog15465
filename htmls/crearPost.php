<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <?php require_once "../Incluide/header.php";
    session_start(); ?>

    <div style="width: 80%; margin-left: 10%;" class="border">
        <div>
            <hr>
            <h2 class="card-title text-center">Crear publicación</h2>
            <hr>
            <div style="display: inline-flex;">
                <img src="../<?= $_SESSION['usuario']['urlFoto']; ?>" class="img-fluid rounded-circle ml-5" style="height: 125px; width: 125px; display: flex;">
                <p class="card-subtitle font-weight-bold" style="font-size: 24px; display: flex; align-items: center; margin-left: 10%"><?= $_SESSION['usuario']['nombre']; ?></p>
            </div>

        </div>
        <div>
            <form action="../incluide/enviarPostBD.php" method="POST" enctype="multipart/form-data">
                <label for="titulo" style="width: 25%; margin-left: 20%; margin-top: 5%; font-family: Georgia, 'Times New Roman', Times, serif;">Titulo</label>
                <input type="text" name="titulo" style="width: 50%;">
                <label for="titulo" style="align-items: center; width: 25%; margin-left: 20%; margin-top: 5%; font-family: Georgia, 'Times New Roman', Times, serif;">Descripción</label>
                <textarea type="text" name="textPost" style="overflow-y: scroll; width: 50%; height: auto;"></textarea>
                <input type="file" name="foto" style="margin-top: 5%; width: 50%; align-items: center; margin-left: 30%;">
                <br>
                <input type="submit" value="Postear" style="margin-top: 5%; width: 25%; margin-left: 40%;">
            </form>
        </div>
    </div>

    <?php require_once "../Incluide/footer.php"; ?>
</body>

</html>