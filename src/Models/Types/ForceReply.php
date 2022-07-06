<?php

namespace Piro\TelegramBot\Models\Types;

class ForceReply extends BasicType
{
    public bool $force_reply;
    public string|null $input_field_placeholder;
    public bool|null $selective;

}
