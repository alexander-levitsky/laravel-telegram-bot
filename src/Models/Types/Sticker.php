<?php

namespace Piro\TelegramBot\Models\Types;

class Sticker extends BasicType
{
public string $file_id;
public string $file_unique_id;
public int $width;
public int $height;
public bool $is_animated;
public bool $is_video;
public PhotoSize|null $thumb;
public string|null $emoji;
public string|null $set_name;
public File|null $premium_animation;
public MaskPosition|null $mask_position;
public int|null $file_size;
}
