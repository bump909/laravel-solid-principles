<?php

namespace App\Notifications;

class SMSNotification implements NotificationInterface
{
    public function send(string $to, string $message): string
    {
        return "SMS sent to {$to}: {$message}";
    }
}
