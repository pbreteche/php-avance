<?php

namespace di;


class MyMailer implements Mailer
{
    public function __construct($smtp)
    {
    }

    public function mail()
    {
        echo 'mail envoyé' . "\n";
    }
}