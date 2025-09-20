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

    <div class="hero-overlay container hero--center">
      <p class="eyebrow">Style intemporel</p>
      <h1 id="hero-title">Milliardstore – des montres qui ne se démodent jamais</h1>
      <p class="season">Printemps–été 2025</p>
      <a class="btn" href="#montres">Je découvre →</a>
    </div>

    <button class="hero-arrow prev" aria-label="Précédent">❮</button>
    <button class="hero-arrow next" aria-label="Suivant">❯</button>


  </section>