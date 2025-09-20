<?php
$categories = [
  ["title" => "Montres femme",     "url" => "#femmes",    "img" => "/assets/img/cat-femmes.jpg",     "alt" => "Montres pour femmes"],
  ["title" => "Montres homme",     "url" => "#hommes",    "img" => "/assets/img/cat-hommes.jpg",     "alt" => "Montres pour hommes"],
  ["title" => "Montres enfant",    "url" => "#enfants",   "img" => "/assets/img/cat-enfants.jpg",    "alt" => "Montres pour enfants"],
  ["title" => "Montres connectées","url" => "#connectees","img" => "/assets/img/cat-connectees.jpg", "alt" => "Montres connectées"],
  ["title" => "Montres spéciales", "url" => "#speciales", "img" => "/assets/img/cat-speciales.jpg",  "alt" => "Montres spéciales"],
];
?>
<section id="montres" class="section categories" aria-labelledby="cat-title">
  <div class="container">
    <h2 id="cat-title">Votre grossiste de montres en ligne</h2>
    <ul class="cats" role="list">
      <?php foreach ($categories as $c): ?>
        <li class="card">
          <a class="card-link" href="<?= htmlspecialchars($c['url']) ?>">
            <figure class="card-media">
              <img src="<?= htmlspecialchars($c['img']) ?>"
                   alt="<?= htmlspecialchars($c['alt']) ?>" loading="lazy">
            </figure>
            <h3 class="card-title"><?= htmlspecialchars($c['title']) ?></h3>
            <span class="card-arrow" aria-hidden>→</span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
