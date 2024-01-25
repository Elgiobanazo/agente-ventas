<main class="main-container">
    <div class="cliente-nuevo">
        <div class="button-container">
            <a href="/" class="button-container__back"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <form action="/cliente-nuevo" method="POST" class="formulario">
            <?php require_once __DIR__ . '/../templates/alertas.php' ?>
            <div class="formulario__campo">
                <input type="text" name="cedula" class="formulario__input" placeholder="Identificación" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="nombres" class="formulario__input" placeholder="Nombres" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="apellidos" class="formulario__input" placeholder="Apellidos" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="direccion" class="formulario__input" placeholder="Dirección" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="barrio" class="formulario__input" placeholder="Barrio" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="telefono" class="formulario__input" placeholder="Teléfono" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="valor_articulo" class="formulario__input" placeholder="Valor Articulo" required>
            </div>

            <div class="formulario__campo formulario__campo--select">
                <label for="utilidad">Utilidad:</label>
                <select name="utilidad" id="utilidad" class="formulario__select formulario__select--azul">
                    <option value="1.20" selected>1.20</option>
                    <option value=""></option>
                </select>
            </div>

            <div class="formulario__campo formulario__campo--select">
                <label for="cuotas">cuotas:</label>
                <select name="cuotas" id="cuotas" class="formulario__select formulario__select--morado">
                    <option value="20" selected>20</option>
                    <option value=""></option>
                </select>
            </div>

            <input type="submit" class="formulario__submit" value="Guardar Cliente">
        </form>
    </div>
</main>