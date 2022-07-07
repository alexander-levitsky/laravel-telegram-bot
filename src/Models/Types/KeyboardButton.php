<?php

namespace Piro\TelegramBot\Models\Types;

class KeyboardButton extends BasicType
{
    public string $text;
    public ?bool $request_contact;
    public ?bool $request_location;
    public ?KeyboardButtonPollType $request_poll;
    public ?WebAppInfo $web_app;
}
