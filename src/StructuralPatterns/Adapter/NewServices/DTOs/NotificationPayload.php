<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\NewServices\DTOs;

class NotificationPayload
{

    public function __construct(
        private string $receiverId,
        private string $title,
        private string $message,
        private array $options = []
    ) {}


    public function getOptions(): array
    {
        return $this->options;
    }

    public function getReceiverId(): string
    {
        return $this->receiverId;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


}