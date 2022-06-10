<?php

@include __DIR__ . DS . 'credentials.php';

return [
  'debug' => false,
  'thumbs' => [
    'bin' => 'convert',
    'driver' => 'im',
    'format' => 'webp'
  ]
];