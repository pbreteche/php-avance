<?php

namespace di;


class MyMailerFactory
{

    public function create()
    {
        return new MyMailer('mail.dawan.fr');
    }
}
