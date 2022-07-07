<?php

namespace Piro\TelegramBot\Models\Types;

use function Piro\TelegramBot\Helpers\arrayOfType;

class Message extends BasicType
{
    public int $message_id;
    public ?User $from;
    public ?Chat $sender_chat;
    public ?int $date;
    public ?Chat $chat;
    public ?User $forward_from;
    public ?Chat $forward_from_chat;
    public ?string $forward_signature;
    public ?string $forward_sender_name;
    public ?int $forward_date;
    public ?bool $is_automatic_forward;
    public ?Message $reply_to_message;
    public ?User $via_bot;
    public ?int $edit_date;
    public ?bool $has_protected_content;
    public ?string $media_group_id;
    public ?string $author_signature;
    public ?string $text;
    public ?array $entities; // MessageEntity[]
    public ?Animation $animation;
    public ?Audio $audio;
    public ?Document $document;
    public ?array $photo; // PhotoSize[]
    public ?Sticker $sticker;
    public ?Video $video;
    public ?VideoNote $video_note;
    public ?Voice $voice;
    public ?string $caption;
    public ?array $caption_entities; // MessageEntity[]
    public ?Contact $contact;
    public ?Dice $dice;
    public ?Game $game;
    public ?Poll $poll;
    public ?Venue $venue;
    public ?Location $location;
    public ?array $new_chat_members; // User[]
    public ?User $left_chat_member;
    public ?string $new_chat_title;
    public ?array $new_chat_photo; // PhotoSize[]
    public ?bool $delete_chat_photo;
    public ?bool $group_chat_created;
    public ?bool $supergroup_chat_created;
    public ?bool $channel_chat_created;
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed;
    public ?int $migrate_to_chat_id;
    public ?int $migrate_from_chat_id;
    public ?Message $pinned_message;
    public ?Invoice $invoice;
    public ?SuccessfulPayment $successful_payment;
    public ?string $connected_website;
    public ?PassportData $passport_data;
    public ?ProximityAlertTriggered $proximity_alert_triggered;
    public ?VideoChatScheduled $video_chat_scheduled;
    public ?VideoChatStarted $video_chat_started;
    public ?VideoChatEnded $video_chat_ended;
    public ?VideoChatParticipantsInvited $video_chat_participants_invited;
    public ?WebAppData $web_app_data;
    public ?InlineKeyboardMarkup $reply_markup;

    public function __construct(array|\stdClass $payload = [])
    {
        parent::__construct($payload);

        $this->arrayOfTypes(MessageEntity::class, 'entities');
        $this->arrayOfTypes(PhotoSize::class, 'photo');
        $this->arrayOfTypes(MessageEntity::class, 'caption_entities');
        $this->arrayOfTypes(User::class, 'new_chat_members');
        $this->arrayOfTypes(PhotoSize::class, 'new_chat_photo');

    }
}
