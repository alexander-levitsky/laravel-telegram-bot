<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\ChosenInlineResult;

class ChosenInlineResultEvent
{
    use Dispatchable;

    public Bot $bot;
    public ChosenInlineResult $chosenInlineResult ;

    public function __construct(Bot $bot, ChosenInlineResult $chosenInlineResult)
    {
        $this->bot = $bot;
        $this->chosenInlineResult = $chosenInlineResult;
    }
}
