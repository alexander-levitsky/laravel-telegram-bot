<?php

namespace Piro\TelegramBot\Models\Types;

class ChatJoinRequest extends BasicType
{
    public Chat $chat ;
    public User $from;
    public int $date;
    public string|null $bio;
    public ChatInviteLink|null $invite_link;
}
