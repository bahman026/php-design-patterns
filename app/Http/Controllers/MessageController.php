<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\FactoryMethod\Publisher\Message;
use Src\FactoryMethod\Publisher\MessagePublisher;

class MessageController extends Controller
{
    private $publisher;

    /**
     * @param $publisher
     */
    public function __construct(MessagePublisher $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @param Request $request
     * @return void
     */
    public function publishMessage(Request $request): void
    {
        $this->publisher->publish(new Message('power', 'image-path', 'powerContent'));
    }


}
