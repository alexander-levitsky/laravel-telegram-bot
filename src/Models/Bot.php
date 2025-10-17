<?php

namespace Piro\TelegramBot\Models;
use Piro\TelegramBot\Exceptions\TelegramApiException;
use Piro\TelegramBot\Models\Types\BotCommandScopeAllChatAdministrators;
use Piro\TelegramBot\Models\Types\BotCommandScopeAllGroupChats;
use Piro\TelegramBot\Models\Types\BotCommandScopeAllPrivateChats;
use Piro\TelegramBot\Models\Types\BotCommandScopeChat;
use Piro\TelegramBot\Models\Types\BotCommandScopeChatAdministrators;
use Piro\TelegramBot\Models\Types\BotCommandScopeChatMember;
use Piro\TelegramBot\Models\Types\BotCommandScopeDefault;
use Piro\TelegramBot\Models\Types\ChatAdministratorRights;
use Piro\TelegramBot\Models\Types\ChatInviteLink;
use Piro\TelegramBot\Models\Types\ChatMemberAdministrator;
use Piro\TelegramBot\Models\Types\ChatMemberBanned;
use Piro\TelegramBot\Models\Types\ChatMemberLeft;
use Piro\TelegramBot\Models\Types\ChatMemberMember;
use Piro\TelegramBot\Models\Types\ChatMemberOwner;
use Piro\TelegramBot\Models\Types\ChatMemberRestricted;
use Piro\TelegramBot\Models\Types\ForceReply;
use Piro\TelegramBot\Models\Types\InlineKeyboardMarkup;
use Piro\TelegramBot\Models\Types\Message;
use Piro\TelegramBot\Models\Types\ReplyKeyboardMarkup;
use Piro\TelegramBot\Models\Types\ReplyKeyboardRemove;
use Piro\TelegramBot\Models\Types\Update;
use Piro\TelegramBot\Models\Types\User;

use Piro\TelegramBot\Traits\CanSendHttpRequest;

class Bot
{
    const baseUrl = 'https://api.telegram.org/';

    private string $token;
    private string $url;

    use CanSendHttpRequest;

    public function __construct(string $token)
    {
        $this->token = $token;
        $this->url = self::baseUrl . 'bot' . $token. '/';
    }

    /**
     * @throws TelegramApiException
     */
    function getMe(): User
    {
        return new User($this->postRequest($this->url . 'getMe'));
    }

    /**
     * @throws TelegramApiException
     */
    function logOut(): bool
    {
        return $this->postRequest($this->url . 'logOut');
    }

    /**
     * @throws TelegramApiException
     */
    function close(): bool
    {
        return $this->postRequest($this->url . 'close');
    }

    /**
     * @throws TelegramApiException
     */
    function sendMessage(
        int|string $chatId,
        string $text,
        string $parseMode = null,
        array $entities = null,
        bool $disableWebPagePreview = null,
        bool $disableNotification = null,
        bool $protectContent = null,
        int $replyToMessageId = null,
        bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup = null,
    ): Message
    {

        $data = [
            'chat_id'=>$chatId,
            'text'=>$text,
            'parse_mode'=>$parseMode,
            'entities'=>$entities,
            'disable_web_page_preview'=>$disableWebPagePreview,
            'disable_notification'=>$disableNotification,
            'protect_content'=>$protectContent,
            'reply_to_message_id'=>$replyToMessageId,
            'allow_sending_without_reply'=>$allowSendingWithoutReply,
            'reply_markup'=>$replyMarkup,
        ];

        return new Message($this->postRequest($this->url . 'sendMessage', $data));
    }


    public function forwardMessage(int|string $chatId, int|string $fromChatId, int $messageId = null, bool $disableNotification = null , bool $protectContent = null): Message
    {
        return new Message($this->postRequest($this->url . 'forwardMessage', [
            'chat_id' =>$chatId,
            'from_chat_id' =>$fromChatId,
            'disable_notification' =>$disableNotification,
            'protect_content' =>$protectContent,
            'message_id' =>$messageId,
        ]));
    }



    /**
     * @throws TelegramApiException
     */
    function getUpdates(int $offset = null, int $limit = null) : array
    {
        $results = $this->postRequest($this->url . 'getUpdates', ['offset'=>$offset,$limit=>$limit]);
        if(count($results)){
            foreach ($results as &$result){
                $result = new Update($result);
            }
        }
        return $results;
    }

    /**
     * @throws TelegramApiException
     */
    function approveChatJoinRequest(string|int $chatId = null, string|int $userId = null)
    {
        return $this->postRequest($this->url . "approveChatJoinRequest", ['chat_id'=>$chatId,'user_id'=>$userId]);
    }

    /**
     * @throws TelegramApiException
     */
    function setMyCommands(array $commands, BotCommandScopeDefault|BotCommandScopeAllPrivateChats|BotCommandScopeAllGroupChats|BotCommandScopeAllChatAdministrators|BotCommandScopeChat|BotCommandScopeChatAdministrators|BotCommandScopeChatMember $scope, string $languageCode = null): bool
    {
        return $this->postRequest($this->url . "setMyCommands", ['commands'=>$commands,'scope'=>$scope, 'language_code'=>$languageCode]);
    }

    function createChatInviteLink(int|string $chat_id, string $name = null, int $expire_date= null, int $member_limit= null, bool $creates_join_request= null)
    {
        return $this->postRequest($this->url . "createChatInviteLink", [
            'chat_id'=>$chat_id,
            'name'=>$name,
            'expire_date'=>$expire_date,
            'member_limit'=>$member_limit,
            'creates_join_request'=>$creates_join_request,
        ]);
    }



    /**
     * @throws TelegramApiException
     */
    function getMyCommands(BotCommandScopeDefault|BotCommandScopeAllPrivateChats|BotCommandScopeAllGroupChats|BotCommandScopeAllChatAdministrators|BotCommandScopeChat|BotCommandScopeChatAdministrators|BotCommandScopeChatMember $scope = null, string $languageCode = null): array
    {
        return $this->postRequest($this->url . "getMyCommands", ['scope'=>$scope, 'language_code'=>$languageCode]);
    }

    function getChatMember(string|int $chatId, int $userId): ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned
    {
        $payload = $this->postRequest($this->url . "getChatMember", ['chat_id'=>$chatId, 'user_id'=>$userId]);
        return match ($payload['status']){
            'creator' => new ChatMemberOwner($payload),
            'administrator' => new ChatMemberAdministrator($payload),
            'member' => new ChatMemberMember($payload),
            'restricted' => new ChatMemberRestricted($payload),
            'left' => new ChatMemberLeft($payload),
            'banned' => new ChatMemberBanned($payload),
        };
    }

    /**
     * @throws TelegramApiException
     */
    function getMyDefaultAdministratorRights(bool $forChannels = null): ChatAdministratorRights
    {
        return new ChatAdministratorRights($this->postRequest($this->url . "getMyDefaultAdministratorRights", ['for_channels'=>$forChannels]));
    }

    /**
     * @throws TelegramApiException
     */
    function answerCallbackQuery(string|int $callbackQueryId, ?string $text = null, ?bool $showAlert = null, ?string $url = null, ?int $cacheTime = null): bool
    {
        return $this->postRequest($this->url . "answerCallbackQuery", [
            'callback_query_id'=>$callbackQueryId,
            'text'=>$text,
            'show_alert'=>$showAlert,
            'url'=>$url,
            'cache_time'=>$cacheTime,
        ]);
    }


}
