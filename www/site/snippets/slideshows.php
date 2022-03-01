<?php foreach($data->children()->listed() as $slideshow): ?>
<section id="<?= $slideshow->id() ?>">
  <?php foreach($slideshow->images() as $image): ?>
  <div class="slide_name">
    <h1><?=$image->name()?></h1>
  </div>
  <div class="slide">
    <img src="<?= $image->resize(null, 180)->url(); ?>" alt="<?=$image->name()?>"
      data-slide="{<?= $image->resize(null, 180)->url(); ?>}" />
  </div>
  <?php endforeach ?>
</section>
<?php endforeach ?>