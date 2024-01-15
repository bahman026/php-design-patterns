<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Src\Builder\OrderBuilder\Order;
use Src\Builder\OrderBuilder\OrderBuilder;
use Src\Builder\OrderBuilder\OrderLine;
use Src\Builder\RequestBuilder\RequestBuilder;
use Src\FactoryMethod\Logger\Logger;
use Src\FactoryMethod\Logger\LogMessage;
use Src\FactoryMethod\Logger\TelegramApi;
use Src\FactoryMethod\Logger\TelegramLoggerFactory;
use Src\Solid\DIP\Authentication;
use Src\Solid\DIP\MySqlConnection;
use Src\Solid\DIP\MongoUserProvider;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
//        this is for factory logger
        $log = new TelegramLoggerFactory();
        $message = new LogMessage("test");
        $log->log($message);

        /*//        this is for dip
                $auth = new Authentication();
                $auth->check('bahman', 'this is password');*/

        /*//        this is for builder
                $request = RequestBuilder::forge()
                    ->withUri('https://example.com')
                    ->withMethod('GET')
                    ->withData([
                        'username' => "username",
                        'password' => "password",
                    ])->build();
                $request->run();*/

//        this is for orderBuilder
        $order = null;
        $orderLine = new OrderLine('orderName', 10, 1000);
        $order = OrderBuilder::forge($order)
            ->withCustomer("customer")
            ->withTotalPrice(1000)
            ->withFinalPrice(1000)
            ->withOrderLines($orderLine)
            ->withStatus(10)
            ->withDeliveryAddress("address")
            ->build();

        dd($order);
    }
}
