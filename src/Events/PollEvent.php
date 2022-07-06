<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\Poll;

class PollEvent
{
    use Dispatchable;

    public Bot $bot;
    public Poll $poll ;

    public function __construct(Bot $bot, Poll $poll)
    {
        $this->bot = $bot;
        $this->poll = $poll;
    }
}
