<?php

namespace Piro\TelegramBot\Test\Mocks;

use Piro\TelegramBot\Models\Types\BotCommand;
use Piro\TelegramBot\Models\Types\BotCommandScopeDefault;

class MockFactory {

    static function botCommand() : BotCommand
    {
        return new BotCommand([
            "command"=> '/test',
            "description"=> 'test description',
        ]);
    }

    static function botCommandScopeDefault() : BotCommandScopeDefault
    {
        return new BotCommandScopeDefault();
    }


}
