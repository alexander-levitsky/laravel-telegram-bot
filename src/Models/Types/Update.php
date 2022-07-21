<?php

namespace Piro\TelegramBot\Models\Types;

class Update extends BasicType
{
    public int $update_id;
    public ?Message $message = null;
    public ?Message $edited_message = null;
    public ?Message $channel_post = null;
    public ?Message $edited_channel_post = null;
    public ?InlineQuery $inline_query = null;
    public ?ChosenInlineResult $chosen_inline_result = null;
    public ?CallbackQuery $callback_query = null;
    public ?ShippingQuery $shipping_query = null;
    public ?PreCheckoutQuery $pre_checkout_query = null;
    public ?Poll $poll = null;
    public ?ChatMemberUpdated $my_chat_member = null;
    public ?ChatJoinRequest $chat_join_request = null;
}
