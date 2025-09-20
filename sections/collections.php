<?php
$collections = [
  ["title" => "collection MONTRES",
   "img"   => "/assets/img/collection-montres.jpg",
   "alt"   => "collection MONTRES",
   "url"   => "#montres"],
  ["title" => "collection BIJOUX ACCESSOIRES",
   "img"   => "/assets/img/collection-bijoux-accessoires.jpg",
   "alt"   => "collection BIJOUX ACCESSOIRES",
   "url"   => "#bijoux"],
];
?>
<section id="collections" class="section collections" aria-labelledby="col-title">
  <div class="container">
    <div class="tiles">
      <?php foreach ($collections as $c): ?>
        <article class="tile">
          <figure class="tile-media">
            <img src="<?= htmlspecialchars($c['img']) ?>" alt="<?= htmlspecialchars($c['alt']) ?>" loading="lazy">
          </figure>
          <div class="tile-body">
            <h3><?= htmlspecialchars($c['title']) ?></h3>
            <a class="link-cta" href="<?= htmlspecialchars($c['url']) ?>">JE DÉCOUVRE →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
