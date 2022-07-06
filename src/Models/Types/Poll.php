<?php

namespace Piro\TelegramBot\Models\Types;

class Poll extends BasicType
{
public string $id;
public string $question;
public array $options;
public int $total_voter_count;
public bool $is_closed;
public bool $is_anonymous;
public string $type;
public bool $allows_multiple_answers;
public int|null $correct_option_id;
public string|null $explanation;
public array|null $explanation_entities;
public int|null $open_period;
public int|null $close_date;
}
