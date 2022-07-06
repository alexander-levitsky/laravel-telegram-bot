<?php

namespace Piro\TelegramBot\Models\Types;

class Voice extends BasicType
{
public string $file_id;
public string $file_unique_id;
public int $duration;
public string|null $mime_type;
public int|null $file_size;
}
