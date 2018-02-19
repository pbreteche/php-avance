<?php

require __DIR__ . '/../vendor/autoload.php';

// Business process
$model = new minimalMVC\model\Model();
$data = $model->process();

// Rendering
$view = new minimalMVC\view\View();
$output = $view->render($data);

// Terminate
echo $output;