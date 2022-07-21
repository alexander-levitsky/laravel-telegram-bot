<?php

namespace Piro\TelegramBot\Models\Types;

class Chat extends BasicType
{
    public int $id;
    public string $type;
    public ?string $title = null;
    public ?string $username = null;
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?ChatPhoto $photo = null;
    public ?bool $has_private_forwards = null;
    public ?bool $join_to_send_messages = null;
    public ?string $description = null;
    public ?string $invite_link = null;
    public ?ChatPermissions $permissions = null;
    public ?int $slow_mode_delay = null;
    public ?int $message_auto_delete_time = null;
    public ?bool $has_protected_content = null;
    public ?int $linked_chat_id = null;
    public ?ChatLocation $location = null;
}

