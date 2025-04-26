<?php

namespace Pc\Designpatterns\CreationalPattern\FactoryMethod;

interface Notification
{
    public function send(string $message): void;

    public function getType(): string;

    public function getSender(): string;

    public function getRecipient(): string;

    public function getSubject(): string;

    public function getBody(): string;

    public function getAttachments(): array;


}