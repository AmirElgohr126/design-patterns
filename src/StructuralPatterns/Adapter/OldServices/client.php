<?php
namespace Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Client;

use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\NotificationManager;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Services\EmailNotifier;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Services\FirebaseNotifier;

require __DIR__ . '/../../../../vendor/autoload.php';

$notifier = new FirebaseNotifier();
$manager = new NotificationManager($notifier);

$manager->notify(
    'amirnagy886',
    'Hello Amir',
    'This is a test message');




