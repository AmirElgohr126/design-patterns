<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter;

use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Contracts\NotificationChannel;
use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs\NotificationPayload;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Contracts\Notifier;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Models\Message;

class FirebaseNotifierAdapter implements NotificationChannel
{
    public function __construct(private Notifier $firebaseNotifier) {}

    public function sendNotification(NotificationPayload $payload): bool
    {
        $message = new Message(
            receiver: $payload->getReceiverId(),
            subject: $payload->getTitle(),
            body: $payload->getMessage()
        );

        return $this->firebaseNotifier->send($message);
    }
}