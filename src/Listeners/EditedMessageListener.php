<?php

namespace Piro\TelegramBot\Listeners;

use Piro\TelegramBot\Events\EditedMessageEvent;

class EditedMessageListener
{

    /**
     * @throws \Piro\TelegramBot\Exceptions\TelegramApiException
     */
    public function handle(EditedMessageEvent $event): void
    {
        //implement logic here
    }

}
