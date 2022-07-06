<?php

namespace Piro\TelegramBot\Models\Types;

class BotCommandScopeChatMember extends BotCommandScopeDefault
{
    public string $type = 'chat';
    public string|int $chat_id;
    public string|int $user_id;
}
