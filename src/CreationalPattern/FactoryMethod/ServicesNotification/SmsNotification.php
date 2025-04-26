<?php

namespace Pc\Designpatterns\CreationalPattern\FactoryMethod\ServicesNotification;
use Pc\Designpatterns\CreationalPattern\FactoryMethod\Notification;

class SmsNotification implements Notification
{
    private string $sender;
    private string $recipient;
    private string $message;

    public function __construct(string $sender, string $recipient, string $message)
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->message = $message;
    }

    public function send(string $message): void
    {
        // Logic to send SMS
        echo "Sending SMS to {$this->recipient} with message: {$message}\n";
    }

    public function getType(): string
    {
        return 'SMS';
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function getSubject(): string
    {
        return '';
    }

    public function getBody(): string
    {
        return '';
    }

    public function getAttachments(): array
    {
        return [];
    }
}