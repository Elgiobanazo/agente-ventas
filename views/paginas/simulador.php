<main class="main-container">
    <div class="cliente-nuevo">
        <div class="button-container">
            <a href="/" class="button-container__back"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <form action="/simulador-calculado" method="POST" class="formulario">
            <div class="formulario__campo">
                <input type="text" name="valor" class="formulario__input" placeholder="Valor" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="utilidad" class="formulario__input" placeholder="Utilidad" required>
            </div>

            <div class="formulario__campo">
                <input type="text" name="cuotas" class="formulario__input" placeholder="Cuotas" required>
            </div>

            <input type="submit" class="formulario__submit" value="Calcular">
        </form>
    </div>
</main>