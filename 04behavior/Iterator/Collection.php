<?php

namespace behavior\Iterator;


class Collection
{

    public $data;

    /**
     * Collection constructor.
     *
     * @param $params
     */
    public function __construct(array $params)
    {
        $this->data = $params;
    }
}