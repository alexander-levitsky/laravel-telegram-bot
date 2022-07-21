<?php

namespace Piro\TelegramBot\Models\Types;

class InlineKeyboardButton extends BasicType
{
    public string $text;
    public ?string $url = null;
    public ?string $callback_data = null;
    public ?WebAppInfo $web_app = null;
    public ?LoginUrl $login_url = null;
    public ?string $switch_inline_query = null;
    public ?string $switch_inline_query_current_chat = null;
    public ?CallbackGame $callback_game = null;
    public ?bool $pay = null;
}
