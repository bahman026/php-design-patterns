<?php

namespace Src\Adapter\Notification;

class TelegramNotifierAdapter implements NotifierInterface
{
    private TelegramAPI $telegramAPI;

    private string $chatId;

    public function __construct(TelegramAPI $telegramAPI, string $chatId)
    {
        $this->telegramAPI = $telegramAPI;
        $this->chatId = $chatId;
    }

    public function send(string $message): bool
    {
        return $this->telegramAPI->send($this->chatId, $message);
        // TODO: Implement send() method.
    }
}
