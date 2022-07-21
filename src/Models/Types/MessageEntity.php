<?php

namespace Piro\TelegramBot\Models\Types;

class MessageEntity extends BasicType
{
    public string $type;
    public ?int $offset = null;
    public ?int $length = null;
    public ?string $url = null;
    public ?User $user = null;
    public ?string $language = null;
}
