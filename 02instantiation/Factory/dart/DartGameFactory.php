<?php

namespace instantiation\Factory\dart;

class DartGameFactory
{

    /**
     * DartGameFactory constructor.
     */
    public function __construct()
    {
    }

    public function create($string): DartGame
    {
        return new CricketGame();
    }
}