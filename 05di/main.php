<?php
namespace di;


require __DIR__ . '/../vendor/autoload.php';

$container = new ServiceContainer();

$newsletter = $container->get('newsletter');

$newsletter->publishCampaign();