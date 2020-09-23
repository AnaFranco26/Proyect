<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loguin </title>
    <link rel="stylesheet" href="view/css/estilos.css"/>
    <script src="https://kit.fontawesome.com/1f9678f8fa.js" crossorigin="anonymous"></script>

</head>
<body >

<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <div class="input-group">
    <i class="fa fa-user-o icons"></i>
    <input type="text" name="usuario" placeholder="usuario" class="form-control">
  </div>

  <div class="input-group">
    <i class="fa fa-lock icons"></i>
    <input type="password" name="Contraseña" placeholder="Contraseña" class="form-control">
  </div>


    <div class="input-group">
        <select class="form-control" name="rol" ><        <option value="">seleccione rol</option>
        <option value="administrador">Administrador</option>
        <option value="usuario">Usuario</option>
    </select>

    </div>

<?php if (!empty($errores)):?>
<ul>
    <?php echo $errores; ?>
</ul>
<?php endif; ?>
  <button type="submit" name="submit" class="btn btn-flat-green">Ingresar <i class="fas fa-sign-in-alt"></i></button>
</form>



</div>
  
</body>
</html>