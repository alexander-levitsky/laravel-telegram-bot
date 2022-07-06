<?php

namespace Piro\TelegramBot\Models\Types;

class SuccessfulPayment extends BasicType
{
public string $currency;
public int $total_amount;
public string $invoice_payload;
public string|null $shipping_option_id;
public OrderInfo|null $order_info;
public string $telegram_payment_charge_id;
public string $provider_payment_charge_id;
}
