<?php

namespace Piro\TelegramBot\Models\Types;

class ChosenInlineResult extends BasicType
{
public string $result_id;
public User $from;
public Location|null $location;
public string|null $inline_message_id;
public string $query;
}
