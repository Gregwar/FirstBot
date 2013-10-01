<?php

include('vendor/autoload.php');

/**
 * Include here your custom libraries
 */

$slidey = new Gregwar\Slidey\Slidey;
$slidey
    ->setTitle('FirstBot')
    ->copy('img', 'img')
    ->copy('favicon.ico')
    ->build()
    ;
