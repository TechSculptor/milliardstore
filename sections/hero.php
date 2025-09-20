<?php // sections/hero.php ?>
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