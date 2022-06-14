<?php if($data->toogle()->bool() === false): ?>
<section class="slideshow right">
  <?php foreach($data->images() as $image): ?>
  <div class="slides">
    <img class="lazy-loaded-image lazy" alt="<?= $image->alt() ?>" src="../images/placeholder.webp"
      data-src="<?= $image->resize(1400)->url() ?>" />
  </div>
  <?php endforeach ?>
  <div class="txt-wrapper">
    <h2 class="title">
      <?= $data->title() ?>
    </h2>
    <h3 class="info"> <?= $data->year() ?></h3>
  </div>
</section>
<?php endif ?>

<?php if($data->toogle()->bool() === true): ?>
<section class="slideshow left">
  <?php foreach($data->images() as $image): ?>
  <div class="slides">
    <img class="lazy-loaded-image lazy" alt="<?= $image->alt() ?>" src="../images/placeholder.webp"
      data-src="<?= $image->resize(1400)->url() ?>" />
  </div>
  <?php endforeach ?>
  <div class="txt-wrapper">
    <h2 class="title">
      <?= $data->title() ?>
    </h2>
    <h3 class="info"> <?= $data->year() ?></h3>
  </div>
</section>
<?php endif ?>