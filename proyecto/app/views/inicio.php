<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= APP_NAME ?> — <?= APP_SLOGAN ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&family=Newsreader:opsz,wght@6..72,400;6..72,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php require APP_PATH . '/views/partials/header.php'; ?>

<main>
  <section class="hero">
    <div class="contenedor hero-grid">
      <div class="hero-texto">
        <h1>Tu patrimonio, en manos que rinden cuentas.</h1>
        <p class="lead">Administramos, protegemos y hacemos crecer lo que has construido, con reglas claras y reportes que puedes entender.</p>
        <div class="hero-cta">
          <a class="btn btn-verde" href="registro.php">Abrir mi cuenta</a>
          <a class="enlace" href="#servicios">Ver servicios</a>
        </div>
      </div>
      <dl class="hero-datos">
        <div><dt>Custodia</dt><dd>Separada de nuestro patrimonio, siempre.</dd></div>
        <div><dt>Reportes</dt><dd>Estado de cuenta mensual en lenguaje claro.</dd></div>
        <div><dt>Atención</dt><dd>Un asesor asignado a tu caso.</dd></div>
      </dl>
    </div>
  </section>

  <section class="seccion" id="servicios">
    <div class="contenedor">
      <h2>Lo que hacemos por ti</h2>
      <ul class="lista-servicios">
        <?php foreach ($servicios as $s): ?>
        <li>
          <h3><?= htmlspecialchars($s['titulo']) ?></h3>
          <p><?= htmlspecialchars($s['texto']) ?></p>
          <a class="enlace-verde" href="registro.php">Solicitar</a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="seccion seccion-linea" id="proceso">
    <div class="contenedor dos-col">
      <h2>Empezar es sencillo</h2>
      <ol class="pasos">
        <?php foreach ($pasos as $i => $p): ?>
        <li><span class="n"><?= $i + 1 ?></span><?= htmlspecialchars($p) ?></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="cierre">
    <div class="contenedor cierre-grid">
      <h2>¿Listo para hablar de tu caso?</h2>
      <a class="btn btn-verde" href="registro.php">Crear cuenta</a>
    </div>
  </section>
</main>

<?php require APP_PATH . '/views/partials/footer.php'; ?>
</body>
</html>
