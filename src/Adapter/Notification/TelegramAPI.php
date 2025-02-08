<?php

namespace Src\Adapter\Notification;

class TelegramAPI
{
    public function send(string $chatId, string $message): bool
    {
        return true;
    }
}
