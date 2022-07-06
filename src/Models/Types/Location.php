<?php

namespace Piro\TelegramBot\Models\Types;

class Location extends BasicType
{
    public float $longitude;
    public float $latitude;
    public float|null $horizontal_accuracy;
    public int|null $live_period;
    public int|null $heading;
    public int|null $proximity_alert_radius;

}
