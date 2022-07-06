<?php

namespace Piro\TelegramBot\Models\Types;

class OrderInfo extends BasicType
{
public string|null $name;
public string|null $phone_number;
public string|null $email;
public ShippingAddress|null $shipping_address;
}
