<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Services;

use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Contracts\NotificationChannel;
use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs\NotificationPayload;

class PushNotificationService implements NotificationChannel
{

    public function sendNotification(NotificationPayload $payload): bool
    {
        echo "🔔 [Push] Sending Push Notification to Receiver: " . $payload->getReceiverId() . PHP_EOL;
        echo "Title: " . $payload->getTitle() . PHP_EOL;
        echo "Message: " . $payload->getMessage() . PHP_EOL;

        if (!empty($payload->getOptions())) {
            echo "Options: " . json_encode($payload->getOptions()) . PHP_EOL;
        }
        echo '<br>';
        echo "----------------------------------" . PHP_EOL;
        echo '<br>';

        // Simulate sending the notification
        return true;
    }
}