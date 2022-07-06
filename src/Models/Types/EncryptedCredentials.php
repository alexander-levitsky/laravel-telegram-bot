<?php

namespace Piro\TelegramBot\Models\Types;

class EncryptedCredentials extends BasicType
{
public string $data;
public string $hash;
public string $secret;
}
