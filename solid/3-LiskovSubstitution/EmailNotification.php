<?php

namespace App\Notifications;

class EmailNotification implements NotificationInterface
{
    public function send(string $to, string $message): string
    {
        return "Email sent to {$to}: {$message}";
    }
}
