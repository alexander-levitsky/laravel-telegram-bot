<?php

namespace Piro\TelegramBot\Models\Types;

class ReplyKeyboardMarkup extends BasicType
{
    public array $keyboard;
    public bool|null $resize_keyboard;
    public bool|null $one_time_keyboard;
    public string|null $input_field_placeholder;
    public bool|null $selective;
}
