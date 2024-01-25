<main class="main-container--mostrar-clientes">
    <div class="main-container">
        <div class="button-container">
            <a href="/" class="button-container__back"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <form action="/mostrar-clientes" method="POST" class="formulario--search__container">
            <input type="search" class="formulario--search__input" name="buscar" placeholder="Cliente Nombre...">
            <input type="submit" class="formulario--search__submit" value="Buscar">
        </form>
    </div>

    <?php if($clientes): ?>
    <table class="tabla--lineal">
        <?php $i = 1; foreach($clientes as $cliente): ?>
            <tr class="tabla--lineal__tr">        
                <th class="tabla--lineal__th"><?=$i?></th>
                <td class="tabla--lineal__td">
                    <p><span><?=$cliente->nombres?></span></p>
                    <p><?=$cliente->barrio?></p>
                    <div class="tabla--lineal__informacion">
                        <p><span>TOTAL:</span> 20</p>
                        <p><span>PAGADOS:</span> 3</p>
                        <p><span>VIGENTES:</span> 1</p>
                        <p><span>TIPO:</span> BUENO</p> 
                    </div>  
                </td>
                <td class="tabla--lineal__td tabla--lineal__acciones">
                    <form action="/datos-cliente" method="POST">
                        <input type="hidden" name="id" value="<?=$cliente->id?>">
                        <input type="submit"value="Datos" class="tabla--lineal__acciones--datos">
                    </form>

                    <form action="/venta-cliente" method="POST">
                        <input type="hidden" name="id" value="<?=$cliente->id?>">
                        <input type="submit" value="Venta" class="tabla--lineal__acciones--venta">
                    </form>
                </td>
            </tr>
        <?php $i++; endforeach ?>
    </table>
    <?php else: ?>
        <h3>No Tienes Clientes Aún</h3>
    <?php endif ?>
</main>