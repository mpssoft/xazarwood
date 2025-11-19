<?php

namespace App\Notifications\Channels;

use Illuminate\Notifications\Notification;

class RayganSmsChannel
{

    public function send($notifiable , Notification $notification)
    {
        $data = $notification->toRayganSms();

        $message = urlencode($data['message']);
        $receptor = $data['to'];
        $username = config('services.raygansms.username');
        $password = config('services.raygansms.password');
        $url = "https://raygansms.com/SendMessageWithCode.ashx?Username={$username}&Password={$password}&Message={$message}&Mobile={$receptor}";
        return file_get_contents($url);

    }

    public function errorCodes()
    {
        return [
            0 => "Error in sending sms - 0",
            3 => "Error in sending sms - 3",
            2 => "success send without saving in site - 2",
            4 => "insufficient credit  - 4",
            5 => "Long message  - 5",
            6 => "unauthorized access - 6",
            7 => "number of recipients exceeded - 7",
            8 => "authentication failed - 8",
        ];
    }
}
