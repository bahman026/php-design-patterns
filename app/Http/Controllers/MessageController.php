<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\Creational\FactoryMethod\Publisher\Message;
use Src\Creational\FactoryMethod\Publisher\MessagePublisher;

class MessageController extends Controller
{
    private MessagePublisher $publisher;

    public function __construct(MessagePublisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function publishMessage(Request $request): void
    {
        $this->publisher->publish(new Message('power', 'image-path', 'powerContent'));
    }
}
