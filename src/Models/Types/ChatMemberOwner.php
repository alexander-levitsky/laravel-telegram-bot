<?php

namespace Piro\TelegramBot\Models\Types;

class ChatMemberOwner extends BasicType
{
    public string $status;
    public User $user;
    public bool $is_anonymous;
    public ?string $custom_title = null;
}
