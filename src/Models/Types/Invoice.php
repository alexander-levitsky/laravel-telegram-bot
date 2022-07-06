<?php

namespace Piro\TelegramBot\Models\Types;

class Invoice extends BasicType
{
public string $title;
public string $description;
public string $start_parameter;
public string $currency;
public int $total_amount;
}
