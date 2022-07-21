<?php

namespace Piro\TelegramBot\Models\Types;

class KeyboardButton extends BasicType
{
    public string $text;
    public ?bool $request_contact = null;
    public ?bool $request_location = null;
    public ?KeyboardButtonPollType $request_poll = null;
    public ?WebAppInfo $web_app = null;
}
