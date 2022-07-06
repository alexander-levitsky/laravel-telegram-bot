<?php

namespace Piro\TelegramBot\Models\Types;

class Venue extends BasicType
{
public Location $location;
public string $title;
public string $address;
public string|null $foursquare_id;
public string|null $foursquare_type;
public string|null $google_place_id;
public string|null $google_place_type;
}
