<div class="mt-5 border p-2 shadow p-3 bg-white rounded" style="display: inline-flex; margin-left: 10%; margin-right: 10%; width: 80%; background-color: white;">
   <article>
   <?php require_once "htmls/articulos.php" ?>
   </article>
    
    <?php if (!isset($_SESSION['usuario'])) : ?>
        <div class="border" style="margin-top: 5%; width: 25%; height: 350px;">
            <?php if (isset($_SESSION['errorLogin'])) : ?>
                <p class="w-100" style="text-align: center; background-color: #F57373;"><?= $_SESSION['errorLogin'] ?></p>
            <?php endif; ?>
            <form id="login" class="p-2 shadow p-3 bg-white rounded" action="incluide/login.php" method="POST">
                <p class="font-weight-bold">Entrar a la web</p>
                <label for="correo">Email</label>
                <input type="text" name="email" class="input-group" placeholder="Email">
                <label for="password">Contraseña</label>
                <input type="password" class="input-group" name="password" placeholder="Contraseña">
                <input type="submit" value="Entrar" class="d-inline-flex" style="margin-top: 10%; width: 30%;">
                <a href="registrer.php" class="ml-4">Registrarse</a>
            </form>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['usuario'])) : ?>
        <div class="border" style="margin-top: 5%; width: 35%; height: 350px;">
            <?php if (isset($_SESSION['posting'])) : ?>
                <p class="w-100" style="text-align: center; background-color: #25c000;"><?= $_SESSION['posting'] ?></p>
            <?php unset($_SESSION['posting']); endif; ?>
            <p style="margin-top: 10%; text-align: center;">Bienvenido, <strong><?= $_SESSION['usuario']['nombre'] ?> </strong></p>
            <div>
                <img src="<?= $_SESSION['usuario']['urlFoto'] ?>" name="userPhoto" class="img-fluid rounded-circle" style="width: 50%; margin-top: 5%; margin-left: 50%; transform: translateX(-50%);">
            </div>
            <form action="editPerfil.php">
            <input type="submit" class="btn-info w-50"  style="margin-top: 20%; margin-left: 50%; transform: translateX(-50%);" value="Editar perfil">
            </form>
            <form action="htmls/crearPost.php">
            <input type="submit" class="btn-primary w-50"  style="margin-left: 50%; transform: translateX(-50%);" value="Postear">
            </form>
            <form action="incluide/logout.php">
            <input type="submit" class="btn-danger w-50"  style="margin-left: 50%; transform: translateX(-50%); margin-bottom: 5%;" value="Logout">
            </form>
        </div>
        
    <?php endif; ?>
</div>