<?php

namespace Piro\TelegramBot\Models\Types;

class PreCheckoutQuery
{
public string $id;
public User $from;
public string $currency;
public int $total_amount;
public string $invoice_payload;
public string|null $shipping_option_id;
public OrderInfo|null $order_info;
}
