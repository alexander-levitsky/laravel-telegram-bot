<?php

namespace Piro\TelegramBot\Traits;



use Piro\TelegramBot\Exceptions\TelegramApiException;

trait CanSendHttpRequest {

    /**
     * @throws TelegramApiException
     */
    private function postRequest(string $url, array $params = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

        $content = curl_exec($ch);
        curl_close($ch);

        $json = json_decode($content);
        if(!$json->ok) throw new TelegramApiException($content);
        return $json->result;
    }

}
