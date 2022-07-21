<?php

namespace Piro\TelegramBot\Models\Types;

class InlineQuery extends BasicType
{
    public string $id;
    public User $from;
    public string $query;
    public string $offset;
    public ?string $chat_type = null;
    public ?Location $location = null;
}
