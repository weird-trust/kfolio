<section class="slideshow">
  <?php foreach($data->images() as $image): ?>
  <div class=" slides">
    <img class="lazy-loaded-image lazy" alt="<?= $image->alt() ?>" src="www/assets/images/placeholder.webp"
      data-src="<?= $image->resize(750)->url() ?>" />
  </div>
  <?php endforeach ?>
</section>