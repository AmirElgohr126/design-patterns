<?php

namespace Pc\Designpatterns\CreationalPattern\FactoryMethod\ServicesNotification;

use Pc\Designpatterns\CreationalPattern\FactoryMethod\Notification;

class EmailNotification implements Notification
{
    private string $sender;
    private string $recipient;
    private string $subject;
    private string $body;
    private array $attachments;

    public function __construct(string $sender, string $recipient, string $subject, string $body, array $attachments = [])
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->subject = $subject;
        $this->body = $body;
        $this->attachments = $attachments;
    }

    public function send(string $message): void
    {
        // Logic to send email
        echo "Sending email to {$this->recipient} with subject {$this->subject} and message: {$message}\n";
    }

    public function getType(): string
    {
        return 'Email';
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
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
    }
}