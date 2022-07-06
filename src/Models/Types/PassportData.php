<?php

namespace Piro\TelegramBot\Models\Types;

class PassportData extends BasicType
{
    public array $data;
    public EncryptedCredentials $credentials;
}
