<?php

namespace Piro\TelegramBot\Models\Types;

class WebAppInfo extends BasicType
{
    public array $keyboard;
    public ?bool $resize_keyboard = null;
    public ?bool $one_time_keyboard = null;
    public ?string $input_field_placeholder = null;
    public ?bool $selective = null;
}
