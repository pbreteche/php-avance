<?php

namespace structural\Bridge;


require __DIR__ . '/../../vendor/autoload.php';

// We know how to build ProductA
$a = new ProductA();

// We need a ProductB
$b = (new ProductABBridge())->createB($a);

var_dump($b);