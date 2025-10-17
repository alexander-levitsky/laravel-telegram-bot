<?php

namespace Piro\TelegramBot\Models\Types;

class TextQuote extends BasicType
{

    public string $text;
    public ?array $entities = null;
    public ?int $position = null;
    public ?string $is_manual = null;

    public function __construct(array|\stdClass $payload = [])
    {
        parent::__construct($payload);

        $this->arrayOfTypes(MessageEntity::class, 'entities');
    }

}