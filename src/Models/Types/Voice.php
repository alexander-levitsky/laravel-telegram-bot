<?php

namespace Piro\TelegramBot\Models\Types;

class Voice extends BasicType
{
    public string $file_id;
    public string $file_unique_id;
    public int $duration;
    public ?string $mime_type = null;
    public ?int $file_size = null;
}
