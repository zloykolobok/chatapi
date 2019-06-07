<?php
/**
 * Работа с api chat-api
 */
namespace Zloykolobok\Chatapi\Classes;

use Zloykolobok\Chatapi\ChatApi;

class Message extends ChatApi
{
    /**
     * Отправка сообщения
     * @see https://chat-api.com/ru/docs.html
     * @param $phone
     * @param $chatId
     * @param $body
     */
    public function sendMessage($phone,$chatId,$body)
    {
        $url = 'https://foo.chat-api.com/message?token='.$this->apiKey;
        $data = [];

        if(!is_null($phone)){
            $data['phone'] = $phone;
        }
        if(!is_null($chatId)){
            $data['chatId'] = $chatId;
        }

        $data['body'] = $body;

        $res = $this->send($data,$url);

        return $res;
    }
}