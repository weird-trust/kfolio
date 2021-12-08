<?php foreach($data->children()->listed() as $project): ?>
<section id="<?= $project->id() ?>">
  <ul class="photoproject">
    <li>
      <?php foreach($project->images() as $image): ?>
      <a href="<?= $image->url() ?>">
        <img loading="lazy" src="<?= $image->resize(null, 180)->url(); ?>" alt="<?=$image->name()?>" />
      </a>
      <?php endforeach ?>
    </li>
  </ul>
  <h2 class="title">
    <?= $project->title() ?>
  </h2>
  <h3 class="info"><?= $project->text()->kirbytext() ?></h3>
</section>
<?php endforeach ?>