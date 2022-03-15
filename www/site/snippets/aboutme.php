<?php foreach($data->listed() as $project): ?>
<h1><?= $data->title() ?></h1>
<p><?= $data->text()->kirbytext() ?></p>
<?php endforeach ?>