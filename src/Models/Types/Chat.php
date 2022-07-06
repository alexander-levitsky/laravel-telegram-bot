<?php

namespace Piro\TelegramBot\Models\Types;

class Chat extends BasicType
{
    public int $id;
    public string $type;
    public string|null $title;
    public string|null $username;
    public string|null $first_name;
    public string|null $last_name;
    public ChatPhoto|null $photo;
    public bool|null $has_private_forwards;
    public bool|null $join_to_send_messages;
    public string|null $description;
    public string|null $invite_link;
    public ChatPermissions|null $permissions;
    public int|null $slow_mode_delay;
    public int|null $message_auto_delete_time;
    public bool|null $has_protected_content;
    public int|null $linked_chat_id;
    public ChatLocation|null $location;
}

