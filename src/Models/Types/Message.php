<?php

namespace Piro\TelegramBot\Models\Types;

class Message extends BasicType
{
    public int $message_id;
    public ?User $from = null;
    public ?Chat $sender_chat = null;
    public ?int $date = null;
    public ?Chat $chat = null;
    public ?User $forward_from = null;
    public ?Chat $forward_from_chat = null;
    public ?string $forward_signature = null;
    public ?string $forward_sender_name = null;
    public ?int $forward_date = null;
    public ?bool $is_automatic_forward = null;
    public ?Message $reply_to_message = null;
    public ?User $via_bot = null;
    public ?int $edit_date = null;
    public ?bool $has_protected_content = null;
    public ?string $media_group_id = null;
    public ?string $author_signature = null;
    public ?string $text = null;
    public ?array $entities = null; // MessageEntity[]
    public ?Animation $animation = null;
    public ?Audio $audio = null;
    public ?Document $document = null;
    public ?array $photo = null; // PhotoSize[]
    public ?Sticker $sticker = null;
    public ?Video $video = null;
    public ?VideoNote $video_note = null;
    public ?Voice $voice = null;
    public ?string $caption = null;
    public ?array $caption_entities = null; // MessageEntity[]
    public ?Contact $contact = null;
    public ?Dice $dice = null;
    public ?Game $game = null;
    public ?Poll $poll = null;
    public ?Venue $venue = null;
    public ?Location $location = null;
    public ?array $new_chat_members = null; // User[]
    public ?User $left_chat_member = null;
    public ?string $new_chat_title = null;
    public ?array $new_chat_photo = null; // PhotoSize[]
    public ?bool $delete_chat_photo = null;
    public ?bool $group_chat_created = null;
    public ?bool $supergroup_chat_created = null;
    public ?bool $channel_chat_created = null;
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;
    public ?int $migrate_to_chat_id = null;
    public ?int $migrate_from_chat_id = null;
    public ?Message $pinned_message = null;
    public ?Invoice $invoice = null;
    public ?SuccessfulPayment $successful_payment = null;
    public ?string $connected_website = null;
    public ?PassportData $passport_data = null;
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;
    public ?VideoChatScheduled $video_chat_scheduled = null;
    public ?VideoChatStarted $video_chat_started = null;
    public ?VideoChatEnded $video_chat_ended = null;
    public ?VideoChatParticipantsInvited $video_chat_participants_invited = null;
    public ?WebAppData $web_app_data = null;
    public ?InlineKeyboardMarkup $reply_markup = null;

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
