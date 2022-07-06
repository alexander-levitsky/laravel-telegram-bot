<?php

namespace Piro\TelegramBot\Events;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\ChatJoinRequest;

class ChatJoinRequestEvent
{
    use Dispatchable, SerializesModels;

    public Bot $bot ;
    public ChatJoinRequest $chatJoinRequest;

    public function __construct(Bot $bot, ChatJoinRequest $chatJoinRequest)
    {
        $this->bot = $bot;
        $this->chatJoinRequest = $chatJoinRequest;
    }
}
