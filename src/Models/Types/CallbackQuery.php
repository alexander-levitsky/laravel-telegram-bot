<?php

namespace Piro\TelegramBot\Models\Types;

class CallbackQuery extends BasicType
{
public string $id;
public User $from;
public Message|null $message;
public string|null $inline_message_id;
public string $chat_instance;
public string|null $data;
public string|null $game_short_name;
}
