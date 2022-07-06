<?php

namespace Piro\TelegramBot\Models\Types;

class Contact extends BasicType
{
public string $phone_number;
public string $first_name;
public string|null $last_name;
public int|null $user_id;
public string|null $vcard;
}
