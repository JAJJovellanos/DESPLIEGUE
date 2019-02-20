<form method="POST" action="index.php?ctl=<?=$_GET['ctl']?>">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="comentario">Comentario:</label>
    <input type="textarea" name="comentario" class="form-control" id="comentario">
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form> 
