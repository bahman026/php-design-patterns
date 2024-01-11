<?php

namespace Src\Adapter\Notification;

interface NotifierInterface
{
    public function send(string $message);
}
