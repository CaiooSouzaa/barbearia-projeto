<?php

namespace App\Services;

use GuzzleHttp\Client;

class TelegramService
{
    protected $client;
    protected $token;

    public function __construct()
    {
        $this->token = env('TELEGRAM_BOT_TOKEN'); // Verifique se a variável de ambiente está definida
        $this->client = new Client();
    }

    public function sendMessage($chatId, $message)
    {
        $url = "https://api.telegram.org/bot{$this->token}/sendMessage";

        $response = $this->client->post($url, [
            'form_params' => [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML', // Se você quiser usar HTML para formatação
            ],
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
