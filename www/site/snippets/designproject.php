<section id="<?= $data->id() ?>" class="slideshow">
  <?php foreach($data->images() as $image): ?>
  <div class="slides">
    <img src=" <?= $image->resize(null, 500)->url(); ?>" alt="<?=$image->name()?>"
      data-slide="{<?= $image->resize(null, 180)->url(); ?>}" />
  </div>
  <?php endforeach ?>
</section>