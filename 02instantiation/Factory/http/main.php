<?php

require __DIR__ . '/../../../vendor/autoload.php';

$request = \instantiation\Factory\http\Request::createFromSuperGlobals();

echo $request->getQueryString();