<?php 
  $aligment = $data->toogle()->bool() ? 'left' : 'right'; 
?>

<section class="slideshow <?= $aligment ?>">
  <?php foreach($data->images() as $image): ?>

  <?php
  $width = $image->width();
  $height = $image->height();
  ?>

  <div class="slides">
    <div style="--ratio: <?= $width / $height ?>;">
      <img class="lazy-loaded-image lazy" alt="<?= $image->alt() ?>" data-src="<?= $image->resize(1400)->url() ?>" />
    </div>
  </div>
  <?php endforeach ?>

  <div class="txt-wrapper">
    <div>
      <h2 class="title">
        <?= $data->title() ?>
      </h2>
    </div>

    <h3 class="date"> <?= $data->year() ?></h3>
    <p class="counter">( <span> 1</span> / <span><?= $data->images()->count() ?> )</span></p>
  </div>
</section>