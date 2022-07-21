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
    public ?int $correct_option_id = null;
    public ?string $explanation = null;
    public ?array $explanation_entities = null;
    public ?int $open_period = null;
    public ?int $close_date = null;
}
