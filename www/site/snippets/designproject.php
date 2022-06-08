<section class="slideshow">
  <?php foreach($data->images() as $image): ?>
  <div class="slides">
    <img src=" <?= $image->resize(null, 300)->url(); ?>" alt="<?=$image->name()?>"
      data-slide="{<?= $image->resize(null, 300)->url(); ?>}" srcset="<?= $image->srcset([300, 800, 1440]) ?>" />
  </div>
  <?php endforeach ?>
</section>