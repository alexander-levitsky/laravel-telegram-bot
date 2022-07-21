<?php

namespace Piro\TelegramBot\Models\Types;

class Location extends BasicType
{
    public float $longitude;
    public float $latitude;
    public ?float $horizontal_accuracy = null;
    public ?int $live_period = null;
    public ?int $heading = null;
    public ?int $proximity_alert_radius = null;
}