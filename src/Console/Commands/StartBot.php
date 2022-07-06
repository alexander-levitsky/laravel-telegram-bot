<?php

namespace Piro\TelegramBot\Console\Commands;

use Illuminate\Console\Command;

use Piro\TelegramBot\Events\CallbackQueryEvent;
use Piro\TelegramBot\Events\ChannelPostEvent;
use Piro\TelegramBot\Events\ChatJoinRequestEvent;
use Piro\TelegramBot\Events\ChosenInlineResultEvent;
use Piro\TelegramBot\Events\EditedChannelPostEvent;
use Piro\TelegramBot\Events\EditedMessageEvent;
use Piro\TelegramBot\Events\InlineQueryEvent;
use Piro\TelegramBot\Events\MessageEvent;
use Piro\TelegramBot\Events\MyChatMemberEvent;
use Piro\TelegramBot\Events\PollEvent;
use Piro\TelegramBot\Events\PreCheckoutQueryEvent;
use Piro\TelegramBot\Events\ShippingQueryEvent;
use Piro\TelegramBot\Events\UpdateEvent;
use Piro\TelegramBot\Exceptions\TelegramApiException;
use Piro\TelegramBot\Models\Bot;

class StartBot extends Command
{

    protected $signature = 'telegram-bot:start';
    protected $description = 'serve telegram bot';

    private int|null $lastUpdateId = null;

    private Bot $bot;

    /**
     * @throws TelegramApiException
     */
    public function handle()
    {
        $this->bot = new Bot(config('telegram.bot.token'));
        $this->loop();
    }

    /**
     * @throws TelegramApiException
     */
    function loop() : never
    {
        foreach ($this->bot->getUpdates($this->lastUpdateId) as $update) {
            UpdateEvent::dispatch($this->bot, $update);

            if(isset($update->message)) MessageEvent::dispatch($this->bot, $update->message);
            if(isset($update->edited_message)) EditedMessageEvent::dispatch($this->bot, $update->edited_message);
            if(isset($update->channel_post)) ChannelPostEvent::dispatch($this->bot, $update->channel_post);
            if(isset($update->edited_channel_post)) EditedChannelPostEvent::dispatch($this->bot, $update->edited_channel_post);
            if(isset($update->inline_query)) InlineQueryEvent::dispatch($this->bot, $update->inline_query);
            if(isset($update->chosen_inline_result)) ChosenInlineResultEvent::dispatch($this->bot, $update->chosen_inline_result);
            if(isset($update->callback_query)) CallbackQueryEvent::dispatch($this->bot, $update->callback_query);
            if(isset($update->shipping_query)) ShippingQueryEvent::dispatch($this->bot, $update->shipping_query);
            if(isset($update->pre_checkout_query)) PreCheckoutQueryEvent::dispatch($this->bot, $update->pre_checkout_query);
            if(isset($update->poll)) PollEvent::dispatch($this->bot, $update->message);
            if(isset($update->my_chat_member)) MyChatMemberEvent::dispatch($this->bot, $update->my_chat_member);
            if(isset($update->chat_join_request)) ChatJoinRequestEvent::dispatch($this->bot, $update->chat_join_request);

            $this->lastUpdateId = $update->update_id + 1;
        }

        sleep(config('telegram.bot.timeout'));
        $this->loop();
    }
}
