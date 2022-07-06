<?php

namespace Piro\TelegramBot\Models\Types;

class ChatPermissions extends BasicType
{
    public bool|null $can_send_messages;
    public bool|null $can_send_media_messages;
    public bool|null $can_send_polls;
    public bool|null $can_send_other_messages;
    public bool|null $can_add_web_page_previews;
    public bool|null $can_change_info;
    public bool|null $can_invite_users;
    public bool|null $can_pin_messages;
}
