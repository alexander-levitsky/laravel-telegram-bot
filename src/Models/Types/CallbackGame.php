<?php

namespace Piro\TelegramBot\Models\Types;

class CallbackGame extends BasicType
{
    public int $user_id;
    public int $score;
    public ?bool $force = null;
    public ?bool $disable_edit_message = null;
    public ?int $chat_id = null;
    public ?int $message_id = null;
    public ?string $inline_message_id = null;
}
