<?php

namespace Piro\TelegramBot\Models\Types;

class BotCommand extends BasicType
{
    public string $command;
    public string $description;
}
