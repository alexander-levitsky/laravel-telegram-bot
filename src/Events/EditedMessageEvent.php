<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\Message;

class EditedMessageEvent extends MessageEvent
{
    use Dispatchable;

    public Bot $bot;
    public Message $editedMessage;

    public function __construct(Bot $bot, Message $editedMessage)
    {
        $this->bot = $bot;
        $this->editedMessage = $editedMessage;
    }
}
