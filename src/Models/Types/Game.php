<?php

namespace Piro\TelegramBot\Models\Types;

class Game extends BasicType
{
    public string $title;
    public string $description;
    public array $photo;
    public ?string $text = null;
    public ?array $text_entities = null;
    public ?Animation $animation = null;
}
