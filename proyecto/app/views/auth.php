<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tab === 'registro' ? 'Crear cuenta' : 'Iniciar sesión' ?> — <?= APP_NAME ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&family=Newsreader:opsz,wght@6..72,400;6..72,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/auth.css">
</head>
<body class="auth-body">
<div class="auth">

  <aside class="auth-marca">
    <a href="index.php" class="auth-volver">Volver al inicio</a>
    <div class="auth-marca-centro">
      <img src="img/logo.jpg" alt="<?= APP_NAME ?>">
      <h2><?= APP_NAME ?></h2>
      <p><?= APP_SLOGAN ?>.</p>
    </div>
    <p class="auth-nota">Tu información se maneja con confidencialidad.</p>
  </aside>

  <main class="auth-form">
    <div class="auth-caja">
      <input type="radio" name="tab" id="tab-login" <?= $tab === 'login' ? 'checked' : '' ?>>
      <input type="radio" name="tab" id="tab-registro" <?= $tab === 'registro' ? 'checked' : '' ?>>

      <div class="tabs">
        <label for="tab-login">Iniciar sesión</label>
        <label for="tab-registro">Crear cuenta</label>
      </div>

      <form class="panel panel-login" action="login.php" method="post">
        <h1>Bienvenido de vuelta</h1>
        <p class="sub">Ingresa para ver el estado de tus servicios.</p>

        <label class="campo" for="l-correo">Correo electrónico</label>
        <input id="l-correo" type="email" name="correo" placeholder="tu@correo.com" autocomplete="email" required>

        <label class="campo" for="l-pass">Contraseña</label>
        <input id="l-pass" type="password" name="password" placeholder="Tu contraseña" autocomplete="current-password" required>

        <div class="fila">
          <label class="check"><input type="checkbox" name="recordar"> Recordar sesión</label>
          <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <button class="btn btn-verde btn-block" type="submit">Iniciar sesión</button>
      </form>

      <form class="panel panel-registro" action="registro.php" method="post">
        <h1>Crea tu cuenta</h1>
        <p class="sub">Solo toma un minuto. Un asesor te contactará después.</p>

        <label class="campo" for="r-nombre">Nombre completo</label>
        <input id="r-nombre" type="text" name="nombre" placeholder="Nombre y apellido" autocomplete="name" required>

        <label class="campo" for="r-correo">Correo electrónico</label>
        <input id="r-correo" type="email" name="correo" placeholder="tu@correo.com" autocomplete="email" required>

        <div class="dos">
          <div>
            <label class="campo" for="r-pass">Contraseña</label>
            <input id="r-pass" type="password" name="password" placeholder="Mínimo 8 caracteres" minlength="8" autocomplete="new-password" required>
          </div>
          <div>
            <label class="campo" for="r-pass2">Confirmar</label>
            <input id="r-pass2" type="password" name="password2" placeholder="Repite la contraseña" minlength="8" autocomplete="new-password" required>
          </div>
        </div>

        <label class="check"><input type="checkbox" name="terminos" required> Acepto los términos y la política de privacidad</label>
        <button class="btn btn-verde btn-block" type="submit">Crear cuenta</button>
      </form>
    </div>
  </main>

</div>
</body>
</html>
