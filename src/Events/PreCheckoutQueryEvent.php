<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\PreCheckoutQuery;

class PreCheckoutQueryEvent
{
    use Dispatchable;

    public Bot $bot;
    public PreCheckoutQuery $preCheckoutQuery ;

    public function __construct(Bot $bot, PreCheckoutQuery $preCheckoutQuery)
    {
        $this->bot = $bot;
        $this->preCheckoutQuery = $preCheckoutQuery;
    }
}
