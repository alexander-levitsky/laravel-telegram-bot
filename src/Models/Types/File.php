<?php

namespace Piro\TelegramBot\Models\Types;

class File extends BasicType
{
public string $file_id;
public string $file_unique_id;
public int|null $file_size;
public string|null $file_path;
}
