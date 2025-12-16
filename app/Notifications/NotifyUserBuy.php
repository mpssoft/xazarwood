<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyUserBuy extends Notification implements shouldQueue
{
    use Queueable;

    protected $orderDitail;
    protected $order;

    /**
     * Create a new notification instance.
     */
    public function __construct($order,$orderDitail)
    {
        $this->onQueue('email');
        $this->orderDitail = $orderDitail;
        $this->order = $order;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {

        return ['melipayamak','mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->markdown('emails.inform-user-purchase', [
            'user' => $notifiable,
            'order'=>$this->order
        ]);
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
    public function toMeliPayamakSms($notifiable)
    {
        $oid = $this->order->id;
        return [
            'to' => $notifiable->mobile,
            'bodyId' => env('MELIPAYAMAK_APPLAY_BUY_CODE'),
            'text' => "$notifiable->name; $oid ;$this->orderDitail"
        ];
    }
}
