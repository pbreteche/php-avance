<?php

function double(int $number)
{
    return [
        "result" => $number *2,
    ];
}

$server = new SoapServer(null, ['uri' => 'demo']);

$server->addFunction('double');

$server->handle();


