<?php

namespace Pc\Designpatterns\CreationalPattern\FactoryMethod;

require __DIR__ . '/../../../vendor/autoload.php';

class TestPattern
{

    public static function testEmailNotification()
    {
        $notification = NotificationFactory::createNotification('email','amir nagy','eslam','interview','hi amir');
        $notification->send('welcome to the interview');
        echo "Email notification sent successfully.\n";
    }
}

TestPattern::testEmailNotification();


