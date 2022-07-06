<?php

namespace Piro\TelegramBot\Models\Types;

class ChatMemberAdministrator extends BasicType
{
public string $status;
public User $user;
public bool $can_be_edited;
public bool $is_anonymous;
public bool $can_manage_chat;
public bool $can_delete_messages;
public bool $can_manage_video_chats;
public bool $can_restrict_members;
public bool $can_promote_members;
public bool $can_change_info;
public bool $can_invite_users;
public bool|null $can_post_messages;
public bool|null $can_edit_messages;
public bool|null $can_pin_messages;
public string|null $custom_title;
}
