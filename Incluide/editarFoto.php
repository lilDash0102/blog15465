<h3 class="mt-3 border" style="text-align: center;">Fotografía</h3>
<h6 class="mt-3 border" style="text-align: center;">Añade una foto tuya al perfil.</h6>
<div class="mt-5 text-center">


    <div style="width: 100%;">


    </div>
    <div class="w-100">
        <img src="<?= $_SESSION['usuario']['urlFoto']; ?>" class="img-fluid rounded-circle" style="margin-bottom: 5%; width: 250px; height: 250px; margin-top: 5%;">
    </div>
    <form action="incluide/updatePhoto.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="newFoto" style="text-align: center; width: 50%; margin-left: 50%; transform: translateX(-50%);">
        <input type="submit" value="Actualizar" style="width: 20%;  margin-left: 30%; transform: translateX(-50%); margin-top: 4%;">
    </form>

</div>