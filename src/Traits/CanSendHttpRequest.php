<?php

namespace Piro\TelegramBot\Traits;
use Illuminate\Support\Facades\Http;
use Piro\TelegramBot\Exceptions\TelegramApiException;

trait CanSendHttpRequest {

    /**
     * @throws TelegramApiException
     */

    private function filter($input): array
    {
        foreach ($input as &$value) if (is_array($value)) $value = $this->filter($value);
        return array_filter($input, fn($value)=>!!$value);
    }

    private function postRequest(string $url, array $params = [])
    {
        $response = Http::post($url, $this->filter($params));
        $data = $response->json();
        if(!$data['ok']) throw new TelegramApiException(json_encode($params));
        return $data['result'];
    }

}
