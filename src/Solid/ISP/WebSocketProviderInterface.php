<?php

namespace Src\Solid\ISP;

interface WebSocketProviderInterface extends NotifierInterface
{
    public function sendWebSocket(): bool;
}
