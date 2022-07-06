<?php

namespace Piro\TelegramBot\Models\Types;

class ReplyKeyboardRemove extends BasicType
{
    public bool $remove_keyboard;
    public bool|null $selective;
}
