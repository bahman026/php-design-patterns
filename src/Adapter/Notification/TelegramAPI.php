<?php

namespace Src\Adapter\Notification;

class TelegramAPI
{
    /**
     * @param string $chatId
     * @param string $message
     * @return bool
     */
    public function send(string $chatId, string $message): bool
    {
        return true;
    }
}
