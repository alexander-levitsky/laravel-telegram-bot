<?php

namespace Piro\TelegramBot\Models\Types;

class ChosenInlineResult extends BasicType
{
    public string $result_id;
    public User $from;
    public string $query;
    public ?Location $location = null;
    public ?string $inline_message_id = null;
}
