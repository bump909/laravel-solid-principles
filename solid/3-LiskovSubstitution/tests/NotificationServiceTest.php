<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Notifications\NotificationService;
use App\Notifications\EmailNotification;
use App\Notifications\SMSNotification;

class NotificationServiceTest extends TestCase
{
    public function test_email_notification_works()
    {
        $service = new NotificationService(new EmailNotification());

        $result = $service->notify('user@example.com', 'Hello via Email');

        $this->assertStringContainsString('Email sent to user@example.com', $result);
    }

    public function test_sms_notification_works()
    {
        $service = new NotificationService(new SMSNotification());

        $result = $service->notify('0123456789', 'Hello via SMS');

        $this->assertStringContainsString('SMS sent to 0123456789', $result);
    }
}
