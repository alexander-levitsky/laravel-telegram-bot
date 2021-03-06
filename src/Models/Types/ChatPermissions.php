<?php

namespace Piro\TelegramBot\Models\Types;

class ChatPermissions extends BasicType
{
    public ?bool $can_send_messages = null;
    public ?bool $can_send_media_messages = null;
    public ?bool $can_send_polls = null;
    public ?bool $can_send_other_messages = null;
    public ?bool $can_add_web_page_previews = null;
    public ?bool $can_change_info = null;
    public ?bool $can_invite_users = null;
    public ?bool $can_pin_messages = null;
}
