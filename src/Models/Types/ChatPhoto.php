<?php

namespace Piro\TelegramBot\Models\Types;

class ChatPhoto extends BasicType
{
    public string $small_file_id;
    public string $small_file_unique_id;
    public string $big_file_id;
    public string $big_file_unique_id;
}
