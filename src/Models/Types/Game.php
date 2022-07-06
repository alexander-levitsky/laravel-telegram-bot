<?php

namespace Piro\TelegramBot\Models\Types;

class Game extends BasicType
{
public string $title;
public string $description;
public array $photo;
public string|null $text;
public array|null $text_entities;
public Animation|null $animation;
}
