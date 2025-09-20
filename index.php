<!DOCTYPE html> <!-- HTML5 -->
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Milliardstore — Élégance & précision</title>
  <link rel="stylesheet" href="/assets/css/main.css" />
</head>
<body>

  <!-- HEADER : logo + menu + 3 icônes -->
  <header class="site-header">
    <div class="container header-inner">
      <!-- 1 LOGO -->
      <a class="brand" href="/" aria-label="Accueil Milliardstore">
        <img src="/assets/img/logo1.png" alt="Milliardstore" width="132" height="36" />
      </a>

      <!-- 2 MENU -->
        <!-- 21 Version desktop par défaut -->
        <nav id="mainNav" class="main-nav" aria-label="Navigation principale">
          <ul class="nav" role="list">
            <li><a href="#">ACCUEIL</a></li>
            <li><a href="#montres">MONTRES</a></li>
            <li><a href="#bijoux">BIJOUX ACCESSOIRES</a></li>
            <li><a href="#apropos">À PROPOS</a></li>
          </ul>
        </nav>

        <!-- 22 Version mobile -->
        <button id="menuToggle"
                class="hamburger"
                aria-expanded="false"
                aria-controls="mainNav"
                aria-label="Ouvrir le menu">
          ☰
        </button>

      <!-- 3 LES ICONES -->
      <div class="actions" aria-label="Actions">
        <a class="icon-btn" href="#" title="Rechercher" aria-label="Rechercher">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10 2a8 8 0 105.3 14.3l4.2 4.2 1.4-1.4-4.2-4.2A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z"/></svg>
        </a>
        <a class="icon-btn" href="#" title="Mon compte" aria-label="Mon compte">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zm0 2c-5 0-9 2.5-9 5.5V22h18v-2.5c0-3-4-5.5-9-5.5z"/></svg>
        </a>
        <a class="icon-btn" href="#" title="Panier" aria-label="Panier">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 4H5L4 6H1v2h2l3.6 7.6-1.3 2.4A2 2 0 007 20h12v-2H7.4a.25.25 0 01-.22-.37L8 15h9a2 2 0 001.8-1.1l3.1-6.2A1 1 0 0021 6H7.4L7 4zM7 22a2 2 0 104 0 2 2 0 10-4 0zm8 0a2 2 0 104 0 2 2 0 10-4 0z"/></svg>
        </a>
      </div>
    </div>
  </header>

  <!-- HERO : image responsive + overlay “Élégance & précision” -->
  <section class="hero" aria-labelledby="hero-title">
    <picture>
      <!-- Chargement de la bonne image en fonction de la taille de l'écran -->
      <source srcset="/assets/img/hero-1600.jpg 1600w, /assets/img/hero-800.jpg 800w, /assets/img/hero-480.jpg 480w" type="image/jpeg" />
      <img class="hero-img"
           src="/assets/img/hero-1600.jpg"
           alt="Montres élégantes en situation"
           width="1600" height="900"
           sizes="(max-width:600px) 100vw, (max-width:1024px) 90vw, 1280px" />
    </picture>

    <div class="hero-overlay container">
      <p class="eyebrow">ÉLÉGANCE & PRÉCISION</p>
      <h1 id="hero-title">Montres sophistiquées pour chaque instant.</h1>
      <p class="season">Automne–Hiver 2024</p>
      <a class="btn" href="#montres">Découvrir →</a>
    </div>
  </section>

  <?php include __DIR__.'/sections/categories.php'; ?>

  <script src="/assets/js/app.js" defer></script>

</body>
</html>

