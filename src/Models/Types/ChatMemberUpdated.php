<?php

namespace Piro\TelegramBot\Models\Types;

class ChatMemberUpdated
{
    public Chat $chat;
    public User $from;
    public int $date;
    public ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $old_chat_member;
    public ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned $new_chat_member;
    public ?ChatInviteLink $invite_link = null;
}
