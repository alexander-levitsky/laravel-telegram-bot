<?php

namespace Piro\TelegramBot\Models\Types;

class Contact extends BasicType
{
    public string $phone_number;
    public string $first_name;
    public ?string $last_name = null;
    public ?int $user_id = null;
    public ?string $vcard = null;
}
