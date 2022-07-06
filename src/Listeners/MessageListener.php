<?php

namespace Piro\TelegramBot\Listeners;

use Piro\TelegramBot\Events\MessageEvent;

class MessageListener
{

    /**
     * @throws \Piro\TelegramBot\Exceptions\TelegramApiException
     */
    public function handle(MessageEvent $event): void
    {
        //implement logic here
    }

}
