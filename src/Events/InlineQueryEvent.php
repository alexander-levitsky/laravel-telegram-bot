<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\InlineQuery;

class InlineQueryEvent
{
    use Dispatchable;

    public Bot $bot;
    public InlineQuery $inlineQuery ;

    public function __construct(Bot $bot, InlineQuery $inlineQuery)
    {
        $this->bot = $bot;
        $this->inlineQuery = $inlineQuery;
    }
}
