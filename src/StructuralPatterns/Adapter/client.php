<?php
namespace Pc\Designpatterns\StructuralPatterns\Adapter;

use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs\NotificationPayload;
use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\NotificationDispatcher;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Services\EmailNotifier;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Services\FirebaseNotifier;

require __DIR__ . '/../../../vendor/autoload.php';




$emailAdapter = new EmailNotifierAdapter(new EmailNotifier());
$firebaseAdapter = new FirebaseNotifierAdapter(new FirebaseNotifier());

$dispatcher = new NotificationDispatcher();
$dispatcher->registerChannel($emailAdapter);
$dispatcher->registerChannel($firebaseAdapter);

$payload = new NotificationPayload(
    receiverId: 'user@example.com',
    title: 'New Order Received!',
    message: 'You have a new order. Please check your dashboard.',
    options: ['order_id' => 1234]
);

$dispatcher->dispatch($payload);