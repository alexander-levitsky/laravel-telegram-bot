<?php

namespace Piro\TelegramBot\Models\Types;

class SuccessfulPayment extends BasicType
{
    public string $currency;
    public int $total_amount;
    public string $invoice_payload;
    public string $telegram_payment_charge_id;
    public string $provider_payment_charge_id;
    public ?string $shipping_option_id = null;
    public ?OrderInfo $order_info = null;
}
