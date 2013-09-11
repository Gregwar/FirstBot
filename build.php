<?php

include('vendor/autoload.php');

/**
 * Include here your custom libraries
 */

$slidey = new Gregwar\Slidey\Slidey;

/**
 * Customizing template
 */
// Sets the title prefix
$slidey->setTitle('FirstBot');

/**
 * Adding custom directories
 */

// This will copy the directory "css" to the target directory
$slidey->copy('img', 'img');
$slidey->copy('favicon.ico');

// Runs the build to the web directory
$slidey->build();
