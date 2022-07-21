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
    public ?PhotoSize $thumb = null;
    public ?string $emoji = null;
    public ?string $set_name = null;
    public ?File $premium_animation = null;
    public ?MaskPosition $mask_position = null;
    public ?int $file_size = null;
}
