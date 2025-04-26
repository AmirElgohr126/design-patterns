<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Services;

use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Contracts\Notifier;
use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Models\Message;

class EmailNotifier implements Notifier {

    public function send(Message $message): bool
    {
        echo "Sending Email...\n";
        echo "To: " . $message->getReceiver() . "\n";
        echo "Subject: " . $message->getSubject() . "\n";
        echo "Body: " . $message->getBody() . "\n";
        return true;

    }
}