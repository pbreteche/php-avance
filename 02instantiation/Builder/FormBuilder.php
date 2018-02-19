<?php

namespace instantiation\Builder;


class FormBuilder
{

    private $form;

    public function __construct()
    {
        $this->form = new Form();
    }

    public function add($string): FormBuilder
    {
        $this->form->addField(new Field($string));
        return $this;
    }

    public function getForm(): Form
    {
        $this->form->lock();
        return $this->form;
    }
}