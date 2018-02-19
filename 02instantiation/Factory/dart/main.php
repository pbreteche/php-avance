<?php

require __DIR__ . '/../../../vendor/autoload.php';

$dartGameFactory = new instantiation\Factory\dart\DartGameFactory();

$cricketGame = $dartGameFactory->create('cricket');

$cricketGame->throwDart(18);