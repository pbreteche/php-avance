<?php

namespace instantiation\Singleton;


final class SingletonDemo
{

    /**
     * Keep track of single instance
     *
     * @var SingletonDemo
     */
    private static $instance;

    /**
     * SingletonDemo constructor.
     *
     * Private to prevent anyone to create instance
     */
    private function __construct()
    {
    }

    /**
     * Manage single instantiation
     * Multiple call result in reuse of same object
     *
     * @return SingletonDemo
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}