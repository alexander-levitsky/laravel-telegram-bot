<?php

namespace Piro\TelegramBot\Models\Types;

class CallbackGame extends BasicType
{
    public int $user_id;
    public int $score;
    public ?bool $force;
    public ?bool $disable_edit_message;
    public ?int $chat_id;
    public ?int $message_id;
    public ?string $inline_message_id;
}
