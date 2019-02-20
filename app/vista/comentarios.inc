<div class="container">
    <h2>Comentarios</h2>
<?php
    foreach($comentarios as $fila){
?>
<hr />
    <div class="container">
        <p><?=$fila["nombre"]?> - Fecha: <?=$fila["fecha"]?></p>
        <p><?=$fila["comentario"]?></p>
    </div>
<?php
    }
?>
</div>