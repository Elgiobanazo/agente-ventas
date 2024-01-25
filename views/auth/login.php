<h2 class="login__heading"><?=$titulo?></h2>

<form action="/login" method="POST" class="formulario-google">
    <?php require_once __DIR__ . '/../templates/alertas.php' ?>

    <div class="formulario-google__campo">
        <input type="text" class="formulario__input" id="username" name="username" required>
        <label for="username">Username</label>
    </div>

    <div class="formulario-google__campo">
        <input type="password" class="formulario__input" id="password" name="password" required>
        <label for="password">Contraseña</label>
    </div>

    <input type="submit" class="formulario-google__submit" value="Iniciar Sesión">
</form>
