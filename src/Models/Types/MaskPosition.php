<?php

namespace Piro\TelegramBot\Models\Types;

class MaskPosition extends BasicType
{
    public string $point;
    public float|int $x_shift;
    public float|int $y_shift;
    public float|int $scale;
}
