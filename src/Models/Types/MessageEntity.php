<?php

namespace Piro\TelegramBot\Models\Types;

class MessageEntity extends BasicType
{
public string $type;
public ?int $offset;
public ?int $length;
public ?string $url;
public ?User $user;
public ?string $language;
}
