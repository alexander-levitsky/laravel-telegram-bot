<?php

namespace Piro\TelegramBot\Models\Types;

class ChatMemberBanned extends BasicType
{
public string $status;
public User $user;
public int $until_date;
}
