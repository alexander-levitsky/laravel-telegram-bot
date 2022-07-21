<?php

namespace Piro\TelegramBot\Models\Types;

class LoginUrl extends BasicType
{
    public string $url;
    public ?string $forward_text = null;
    public ?string $bot_username = null;
    public ?bool $request_write_access = null;
}
