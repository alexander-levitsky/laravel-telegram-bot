<?php

namespace Piro\TelegramBot\Models\Types;

class ForceReply extends BasicType
{
    public bool $force_reply;
    public ?string $input_field_placeholder = null;
    public ?bool $selective = null;
}
