<?php

namespace Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Contracts;

use Pc\Designpatterns\StructuralPatterns\Adapter\OldServices\Models\Message;

interface Notifier
{
    public function send(Message $message): bool;
}