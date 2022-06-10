<section class="slideshow">
  <?php foreach($data->images() as $image): ?>
  <div class=" slides">
    <img class="lazy-loaded-image lazy" alt="<?= $image->alt() ?>" src="www/assets/images/placeholder.webp"
      data-src="<?= $image->resize(750)->url() ?>" />
  </div>
  <?php endforeach ?>
  <div class="txt-wrapper">
    <h2 class="title">
      <?= $data->title() ?>
    </h2>
    <h3 class="info"> <?= $data->year() ?></h3>
  </div>

</section>