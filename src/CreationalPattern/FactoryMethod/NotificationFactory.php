<?php

namespace Pc\Designpatterns\CreationalPattern\FactoryMethod;
use Pc\Designpatterns\CreationalPattern\FactoryMethod\ServicesNotification\EmailNotification;
use Pc\Designpatterns\CreationalPattern\FactoryMethod\ServicesNotification\SmsNotification;

class NotificationFactory
{
    public static function createNotification(string $type,
                                              string $sender,
                                              string $recipient,
                                              string $subject = '',
                                              string $body = '',
                                              array $attachments = []): Notification
    {
        switch ($type) {
            case 'email':
                return new EmailNotification($sender, $recipient, $subject, $body, $attachments);
            case 'sms':
                return new SmsNotification($sender, $recipient, $body);
            default:
                throw new \InvalidArgumentException("Unsupported notification type: {$type}");
        }
    }
}