<h3 class="mt-3 border" style="text-align: center;">Tus datos</h3>
<div class="mt-5 text-center">
    <div class="w-100">
        <label for="name" style="display: inline-block; width: 25%;" class="font-weight-bold">Nombre</label>
        <input type="text" style="display: inline-block; width: 75%;" class="w-50" value="<?= $_SESSION['usuario']['nombre'] ?>">
    </div>
    <div class="w-100">
        <label for="apellido" style="display: inline-block; width: 25%;" class="font-weight-bold">Apellido</label>
        <input type="text" style="display: inline-block; width: 75%;" class="w-50" value="<?= $_SESSION['usuario']['apellidos'] ?>">
    </div>
    <div class="w-100">
        <label for="apellido" style="display: inline-block; width: 25%;" class="font-weight-bold">Correo</label>
        <input type="text" style="display: inline-block; width: 75%;" class="w-50" value="<?= $_SESSION['usuario']['email'] ?>">
    </div>

    <div style="width: 100%;">
        <input type="submit" value="Actualizar" style="margin-left: 50%; transform: translateX(-50%); margin-top: 4%;">
    </div>

</div>