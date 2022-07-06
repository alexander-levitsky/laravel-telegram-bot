<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\Message;

class EditedChannelPostEvent extends MessageEvent
{
    use Dispatchable;

    public Bot $bot;
    public Message $editedChannelPost;

    public function __construct(Bot $bot, Message $editedChannelPost)
    {
        $this->bot = $bot;
        $this->editedChannelPost = $editedChannelPost;
    }
}
