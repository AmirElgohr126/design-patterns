<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Services;

use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Contracts\NotificationChannel;
use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs\NotificationPayload;

class SlackNotificationService implements NotificationChannel
{

    public function sendNotification(NotificationPayload $payload): bool
    {
        // simulate sending Slack message
        echo "💬 [Slack] Sending Slack Message to Receiver: " . $payload->getReceiverId() . PHP_EOL;
        echo "*Title:* " . $payload->getTitle() . PHP_EOL;
        echo "*Message:* " . $payload->getMessage() . PHP_EOL;

        if (!empty($payload->getOptions())) {
            echo "*Options:* " . json_encode($payload->getOptions()) . PHP_EOL;
        }

        // Simulate success
        return true;
    }
}