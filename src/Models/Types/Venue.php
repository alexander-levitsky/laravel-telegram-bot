<?php

namespace Piro\TelegramBot\Models\Types;

class Venue extends BasicType
{
    public Location $location;
    public string $title;
    public string $address;
    public ?string $foursquare_id = null;
    public ?string $foursquare_type = null;
    public ?string $google_place_id = null;
    public ?string $google_place_type = null;
}
