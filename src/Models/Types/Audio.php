<?php

namespace Piro\TelegramBot\Models\Types;

class Audio extends BasicType
{
    public string $file_id;
    public string $file_unique_id;
    public int $duration;
    public string|null $performer;
    public string|null $title;
    public string|null $file_name;
    public string|null $mime_type;
    public int|null $file_size;
    public PhotoSize|null $thumb;


}
