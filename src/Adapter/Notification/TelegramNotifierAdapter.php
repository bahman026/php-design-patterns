<?php

namespace Src\Adapter\Notification;

class TelegramNotifierAdapter implements NotifierInterface
{
    private $telegramAPI;
    private $chatId;

    /**
     * @param $telegramAPI
     * @param $cahtId
     */
    public function __construct(TelegramAPI $telegramAPI, $chatId)
    {
        $this->telegramAPI = $telegramAPI;
        $this->chatId = $chatId;
    }

    public function send(string $message)
    {
        $this->telegramAPI->send($this->chatId, $message);
        // TODO: Implement send() method.
    }
}
