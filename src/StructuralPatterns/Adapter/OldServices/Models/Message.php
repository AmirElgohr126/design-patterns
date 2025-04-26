<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Models;

class Message
{
    private string $receiver;
    private string $subject;
    private string $body;

    public function __construct(string $receiver, string $subject, string $body)
    {
        $this->receiver = $receiver;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function getReceiver(): string
    {
        return $this->receiver;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}