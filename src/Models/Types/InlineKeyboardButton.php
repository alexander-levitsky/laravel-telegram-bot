<?php

namespace Piro\TelegramBot\Models\Types;

class InlineKeyboardButton extends BasicType
{
public string $text;
public ?string $url;
public ?string $callback_data;
public ?WebAppInfo $web_app;
public ?LoginUrl $login_url;
public ?string $switch_inline_query;
public ?string $switch_inline_query_current_chat;
public ?CallbackGame $callback_game;
public ?bool $pay;
}
