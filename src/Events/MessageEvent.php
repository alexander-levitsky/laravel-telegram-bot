<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\Message;

class MessageEvent
{
    use Dispatchable;

    public Bot $bot ;
    public Message $message ;

    public function __construct(Bot $bot, Message $message)
    {
        $this->bot = $bot;
        $this->message = $message;
    }
}
