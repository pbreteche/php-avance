<?php
namespace instantiation\Builder;

require __DIR__ . '/../../vendor/autoload.php';

$builder = new FormBuilder();
$loginForm = $builder->add('username')
        ->add('password')
        ->add('not-a-robot')
        ->getForm();

$builder->add('injection');

var_dump($loginForm);