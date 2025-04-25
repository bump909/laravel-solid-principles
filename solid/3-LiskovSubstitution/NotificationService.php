<?php

namespace App\Services\Notifications;

use App\Notifications\NotificationInterface;

class NotificationService
{
    protected NotificationInterface $notifier;

    public function __construct(NotificationInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function notify(string $to, string $message): string
    {
        return $this->notifier->send($to, $message);
    }
}
