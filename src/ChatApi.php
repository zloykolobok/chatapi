<?php
namespace Zloykolobok\Chatapi;

class ChatApi
{
    public $url;
    public $apiKey;

    public function __construct($url, $apiKey)
    {
        $this->url = $url;
        $this->apiKey = $apiKey;
    }

    protected function send($data,$url)
    {
        $json = json_encode($data);
        $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
        ]);

        $result = file_get_contents($url, false, $options);
    }
}