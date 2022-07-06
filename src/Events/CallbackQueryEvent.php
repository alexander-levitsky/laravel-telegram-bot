<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\CallbackQuery;

class CallbackQueryEvent
{
    use Dispatchable;

    public Bot $bot;
    public CallbackQuery $callbackQuery ;

    public function __construct(Bot $bot, CallbackQuery $callbackQuery)
    {
        $this->bot = $bot;
        $this->callbackQuery = $callbackQuery;
    }
}
