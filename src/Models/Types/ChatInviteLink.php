<?php

namespace Piro\TelegramBot\Models\Types;

class ChatInviteLink extends BasicType
{
    public string $invite_link;
    public User $creator;
    public bool $creates_join_request;
    public bool $is_primary;
    public bool $is_revoked;
    public ?string $name = null;
    public ?int $expire_date = null;
    public ?int $pending_join_request_count = null;
}
