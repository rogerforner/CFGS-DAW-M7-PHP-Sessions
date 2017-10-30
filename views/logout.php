<div class="col-md-6 offset-md-3 text-center">
  <h1>HOLA<br /><small><?= $_SESSION['usuario'] ?></small></h1>
  <p><small>Ya has iniciado sesión! (~￣▽￣)~</small></p>

  <form id="formulario" action="scripts/salir.php" method="post">
    <button type="submit" class="btn btn-danger btn-block mt-4">Salir</button>
  </form>
</div>
