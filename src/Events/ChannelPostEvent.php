<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\Message;

class ChannelPostEvent
{
    use Dispatchable;

    public Bot $bot;
    public Message $channelPost;

    public function __construct(Bot $bot, Message $channelPost)
    {
        $this->channelPost = $channelPost;
    }
}
