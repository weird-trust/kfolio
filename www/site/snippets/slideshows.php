<?php foreach($data->children()->listed() as $slideshow): ?>
<section id="<?= $slideshow->id() ?>" class="slideshow">
  <?php foreach($slideshow->images() as $image): ?>
  <div class="slides">
    <img src=" <?= $image->resize(null, 500)->url(); ?>" alt="<?=$image->name()?>"
      data-slide="{<?= $image->resize(null, 180)->url(); ?>}" />
  </div>
  <?php endforeach ?>
</section>
<?php endforeach ?>