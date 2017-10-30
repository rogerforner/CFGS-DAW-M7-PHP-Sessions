<div class="col-md-6 offset-md-3">
  <form id="formulario" action="scripts/validar.php" method="post">
    <div class="form-group">
      <label for="email">Correo electrónico</label>
      <input type="email" name="correo" class="form-control" id="email" aria-describedby="emailHelp" placeholder="@" required>
      <small id="emailHelp" class="form-text text-muted">roger@forner.com</small>
    </div>
    <div class="form-group">
      <label for="contrasena">Contraseña</label>
      <input type="password" name="contrasena" class="form-control" id="contrasena" aria-describedby="passHelp" placeholder="****" required>
      <small id="passHelp" class="form-text text-muted">123</small>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-4">Acceder</button>
  </form>
</div>
