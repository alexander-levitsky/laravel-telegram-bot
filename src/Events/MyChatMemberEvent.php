<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\ChatMemberUpdated;
use Piro\TelegramBot\Models\Types\Poll;

class MyChatMemberEvent
{
    use Dispatchable;

    public Bot $bot;
    public ChatMemberUpdated $chatMemberUpdated ;

    public function __construct(Bot $bot, ChatMemberUpdated $chatMemberUpdated)
    {
        $this->bot = $bot;
        $this->chatMemberUpdated = $chatMemberUpdated;
    }
}
