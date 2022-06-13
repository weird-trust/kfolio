<section class="photoprojects">
  <ul class="photoproject">
    <li>
      <?php foreach($data->images() as $image): ?>
      <img class="lazy-loaded-image lazy pixelator" alt="<?= $image->alt() ?>" src="assets/images/placeholder.webp"
        data-src="<?= $image->resize(600)->url() ?>" />
      </a>
      <?php endforeach ?>
    </li>
  </ul>
  <h2 class="title">
    <?= $data->title() ?>
  </h2>
  <h3 class="info"> <?= $data->year() ?></h3>
</section>