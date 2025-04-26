<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\Contracts;

use Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs\NotificationPayload;

interface NotificationChannel
{
    public function sendNotification(NotificationPayload $payload): bool;
}