<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\NewServices;

use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Contracts\NotificationChannel;
use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs\NotificationPayload;

class NotificationDispatcher
{
    private array $channels = [];


    public function registerChannel(NotificationChannel $channel): void
    {
        $this->channels[] = $channel;
    }

    public function dispatch(NotificationPayload $payload): void
    {
        foreach ($this->channels as $channel) {
            $channel->sendNotification($payload);
        }
    }
}