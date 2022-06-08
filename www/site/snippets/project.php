<section class="gallery">
  <ul class="photoproject">
    <li>
      <?php foreach($data->images() as $image): ?>
      <a href="<?= $image->url() ?>">
        <img loading="lazy" src="<?= $image->resize(null, 180)->url(); ?>" alt="<?=$image->name()?>"
          srcset="<?= $image->srcset([300, 800, 1024]) ?>" />
      </a>
      <?php endforeach ?>
    </li>
  </ul>
  <h2 class="title">
    <?= $data->title() ?>
  </h2>
  <h3 class="info"><?= $data->text()->kirbytext() ?></h3>
</section>