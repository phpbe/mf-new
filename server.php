<?php
require __DIR__ . '/vendor/autoload.php';

$runtime = new \Be\Mf\Runtime\Driver();
$runtime->setRootPath(__DIR__);
\Be\F\Runtime\RuntimeFactory::setInstance($runtime);
$runtime->execute();
