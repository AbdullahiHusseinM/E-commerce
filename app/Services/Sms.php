<?php

namespace \App\Services;
use AfricasTalking\SDK\AfricasTalking;


class Sms

{
    public static function send($phone, $message)
    {
            $client = new AfricasTalking(env('SMS_USER'), env('SMS_KEY'));
            $sms = $client->sms();


            $result = $sms->send([
                'to' => $phone,
                'messge' => $message
            ]);

                
    }
}