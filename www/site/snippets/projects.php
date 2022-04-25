<?php foreach($data->children()->listed() as $project): ?>
<?php snippet($project->intendedTemplate(), ['data' => $project]); ?>
<?php endforeach ?>