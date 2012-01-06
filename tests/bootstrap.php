<?php
// Bootstrap file, can setup everything that cannot be done inside build file (phpunit...)
$loader = require __DIR__.'/../vendor/.composer/autoload.php';
$loader->register();
