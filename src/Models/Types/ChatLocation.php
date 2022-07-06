<?php

namespace Piro\TelegramBot\Models\Types;

class ChatLocation extends BasicType
{
    public Location $location;
    public string $address;
}
