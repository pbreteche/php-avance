<?php

namespace structural\Adapter;


require __DIR__ . '/../../vendor/autoload.php';

$customer = new Customer();

// CapAsProductAdapter reuse Cap implementation
$cap = new CapAsProductAdapter();

$customer->buy($cap);
