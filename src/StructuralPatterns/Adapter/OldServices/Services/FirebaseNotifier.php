<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Services;

use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Contracts\Notifier;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Models\Message;

class FirebaseNotifier implements Notifier
{

    public function send(Message $message): bool
    {
        // Simulate sending a notification via Firebase
        echo "Sending Firebase notification...\n";
        echo "To: " . $message->getReceiver() . "\n";
        echo "Title: " . $message->getSubject() . "\n";
        echo "Body: " . $message->getBody() . "\n";
        return true;
    }
}