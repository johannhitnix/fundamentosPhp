<?php

require_once '../vendor/autoload.php';

$foto_original = 'salchipapa.jpg';
$guardar_en = 'modified.jpg';

$thumb = new PHPThumb\GD($foto_original);
$thumb->resize(250, 250);
$thumb->show();
$thumb->save($guardar_en);