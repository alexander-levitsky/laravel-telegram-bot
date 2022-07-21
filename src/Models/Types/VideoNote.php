<?php

namespace Piro\TelegramBot\Models\Types;

class VideoNote extends BasicType
{
    public string $file_id;
    public string $file_unique_id;
    public int $length;
    public int $duration;
    public ?PhotoSize $thumb = null;
    public ?int $file_size = null;
}
