<?php foreach($alertas as $key => $alerta): ?>
    <?php foreach($alerta as $mensaje): ?>
        <div class="alerta alerta__<?=$key?>"><?=$mensaje?></div>
    <?php endforeach ?>
<?php endforeach ?>