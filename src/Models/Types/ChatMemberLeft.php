<?php

namespace Piro\TelegramBot\Models\Types;

class ChatMemberLeft extends BasicType
{
    public string $status;
    public User $user;
}
