<?php

namespace Piro\TelegramBot\Models\Types;

class Update extends BasicType
{
    public int $update_id;
    public Message|null $message;
    public Message|null $edited_message;
    public Message|null $channel_post;
    public Message|null $edited_channel_post;
    public InlineQuery|null $inline_query;
    public ChosenInlineResult|null $chosen_inline_result;
    public CallbackQuery|null $callback_query;
    public ShippingQuery|null $shipping_query;
    public PreCheckoutQuery|null $pre_checkout_query;
    public Poll|null $poll;
    public ChatMemberUpdated|null $my_chat_member;
    public ChatJoinRequest|null $chat_join_request;
}
