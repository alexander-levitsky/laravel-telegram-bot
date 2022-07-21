<?php

namespace Piro\TelegramBot\Models\Types;

class ChatJoinRequest extends BasicType
{
    public Chat $chat;
    public User $from;
    public int $date;
    public ?string $bio = null;
    public ?ChatInviteLink $invite_link = null;
}
