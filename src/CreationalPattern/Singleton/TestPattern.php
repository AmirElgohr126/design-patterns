<?php
namespace Pc\Designpatterns\CreationalPattern\Singleton;

require __DIR__ . '/../../../vendor/autoload.php';

class TestPattern
{
    public static function test()
    {
        //  create a new instance of the Government class
        $government = Government::getInstance();
        $government2 = Government::getInstance();
        //  get the name of the government
        $name = $government->getName();
        $name2 = $government2->getName();
        //  print the name of the government
        echo $name . PHP_EOL . '<br>';
        echo $name2 . PHP_EOL . '<br>';

        var_dump($government === $government2);
        var_dump($name === $name2);
    }
}

TestPattern::test();
