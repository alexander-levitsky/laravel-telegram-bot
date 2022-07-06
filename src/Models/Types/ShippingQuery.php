<?php

namespace Piro\TelegramBot\Models\Types;

class ShippingQuery extends BasicType
{
public string $id;
public User $from;
public string $invoice_payload;
public ShippingAddress $shipping_address;
}
