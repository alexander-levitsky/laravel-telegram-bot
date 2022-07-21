<?php

namespace Piro\TelegramBot\Models\Types;

class OrderInfo extends BasicType
{
    public ?string $name = null;
    public ?string $phone_number = null;
    public ?string $email = null;
    public ?ShippingAddress $shipping_address = null;
}
