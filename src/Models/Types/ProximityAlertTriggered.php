<?php

namespace Piro\TelegramBot\Models\Types;

class ProximityAlertTriggered extends BasicType
{
    public User $traveler;
    public User $watcher;
    public int $distance;
}
