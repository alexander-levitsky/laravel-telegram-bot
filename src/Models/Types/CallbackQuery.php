<?php

namespace Piro\TelegramBot\Models\Types;

class CallbackQuery extends BasicType
{
    public string $id;
    public User $from;
    public string $chat_instance;
    public ?Message $message;
    public ?string $inline_message_id = null;
    public ?string $data = null;
    public ?string $game_short_name = null;
}
