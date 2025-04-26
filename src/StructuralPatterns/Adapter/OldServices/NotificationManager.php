<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\OldServices;

use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Contracts\Notifier;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Models\Message;

class NotificationManager
{


    public function __construct(private Notifier $notifier){}

    public function notify(string $receiver , string $subject, string $body): bool
    {
        $message = new Message($receiver, $subject, $body);
        return $this->notifier->send($message);
    }
}