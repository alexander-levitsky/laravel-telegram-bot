<?php

namespace Piro\TelegramBot\Models\Types;

class BotCommandScopeChatAdministrators extends BotCommandScopeDefault
{
    public string $type = 'chat_administrators';
    public string|int $chat_id;
}
