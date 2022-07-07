<?php

namespace Piro\TelegramBot\Models\Types;

class WebAppInfo extends BasicType
{
public array $keyboard;
public ?bool $resize_keyboard;
public ?bool $one_time_keyboard;
public ?string $input_field_placeholder;
public ?bool $selective;
}
