<?php

namespace Piro\TelegramBot\Test\Unit;

use PHPUnit\Framework\TestCase;
use Piro\TelegramBot\Models\Bot;
use Piro\TelegramBot\Models\Types\BotCommandScopeDefault;
use Piro\TelegramBot\Models\Types\Message;
use Piro\TelegramBot\Models\Types\User;
use Piro\TelegramBot\Test\Mocks\MockFactory;

class TestBotCommands extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    private $token = '5463217791:AAGooyPMdFMr5ZiQOFz88qYtKN8XIaxeXA0';
    private Bot $bot;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->bot = new Bot($this->token);
    }
    /**
     * @throws \Piro\TelegramBot\Exceptions\TelegramApiException
     */
    public function test_getMe()
    {
        $result = $this->bot->getMe();
        $this->assertInstanceOf(User::class,  $result);
    }


    /**
     * @throws \Piro\TelegramBot\Exceptions\TelegramApiException
     */
    public function test_getUpdates()
    {
        $result = $this->bot->getUpdates();
        $this->assertIsArray($result);
    }

    public function test_setMyCommands()
    {
        $result = $this->bot->setMyCommands([MockFactory::botCommand()], MockFactory::botCommandScopeDefault());
        $this->assertTrue($result);
    }

    public function test_getMyCommands()
    {
        $result = $this->bot->getMyCommands(MockFactory::botCommandScopeDefault());
        $this->assertIsArray($result);
    }

    public function test_senMessage(){
        $result = $this->bot->sendMessage(chatId: 937695095, text: 'assert test');
        $this->assertInstanceOf(Message::class,  $result);
    }


}
