<?php

namespace Piro\TelegramBot\Models\Types;

class LoginUrl extends BasicType
{
public string $url;
public ?string $forward_text;
public ?string $bot_username;
public ?bool $request_write_access;
}
