<?php

namespace Piro\TelegramBot\Models\Types;

class BotCommandScopeChat extends BotCommandScopeDefault
{
    public string $type = 'chat';
    public string|int $chat_id;
}
