<?php

namespace Pc\Designpatterns\CreationalPattern\Singleton;

class Government
{

    //  create a private static variable to hold the instance of the class

    private static ?Government $instance = null;

    //  make the constructor private to prevent instantiation
    private function __construct()
    {

    }

    //  make the clone method private to prevent cloning
    private function __clone()
    {

    }

    //  make the unserialize method private to prevent unserialization
    private function __wakeup()
    {

    }

    //  create a static method to get the instance of the class
    public static function getInstance()
    {
        // check if the instance is null
        if(self::$instance === null){
            self::$instance = new self();
        }
        // return the instance
        return self::$instance;
    }

    //  create a method to get the name of the government
    public function getName()
    {
        return 'Government';
    }

}
