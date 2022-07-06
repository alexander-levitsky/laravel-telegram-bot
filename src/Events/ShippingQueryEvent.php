<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\ShippingQuery;

class ShippingQueryEvent
{
    use Dispatchable;

    public Bot $bot;
    public ShippingQuery $shippingQuery ;

    public function __construct(Bot $bot, ShippingQuery $shippingQuery)
    {
        $this->bot = $bot;
        $this->shippingQuery = $shippingQuery;
    }
}
