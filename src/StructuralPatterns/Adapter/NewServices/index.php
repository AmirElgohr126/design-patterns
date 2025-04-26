<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\NewServices;

use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs\NotificationPayload;
use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Services\PushNotificationService;
use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Services\SlackNotificationService;

require __DIR__ . '/../../../../vendor/autoload.php';



$payload = new NotificationPayload(
    'user_456',
    'Account Activated!',
    'Your account is now active. 🎉',
    ['priority' => 'high', 'url' => 'https://example.com/account']
);

$pushChannel = new PushNotificationService();
$slackChannel = new SlackNotificationService();

$dispatcher = new NotificationDispatcher();
$dispatcher->registerChannel($pushChannel);
$dispatcher->registerChannel($slackChannel);
$dispatcher->dispatch($payload);

