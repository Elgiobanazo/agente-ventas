<main class="main-container">
    <div class="button-container">
        <a href="/" class="button-container__back"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>

    <section class="">
        <h4>Proyección Del Valor Indicado</h4>
        <p><span>CAPITAL: </span>$<?=$resultado['valor']?></p>
        <p><span>TASA: </span><?=$resultado['utilidad']?>%</p>
        <p><span>CUOTAS: </span><?=$resultado['cuotas']?></p>
        <p><span>INTERESES: </span>$<?=$resultado['intereses']?></p>
        <p><span>CUOTA DIARIA: </span>$<?=$resultado['cuota_diaria']?></p>
        <p><span>TOTAL A PAGAR: </span>$<?=$resultado['total']?></p>
    </section>
</main>