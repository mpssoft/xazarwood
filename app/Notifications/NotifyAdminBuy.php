<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyAdminBuy extends Notification implements shouldQueue
{
    use Queueable;
    protected $orderDitail;
    protected $order;
    protected $user;
    /**
     * Create a new notification instance.
     */
    public function __construct($user,$order,$orderDitail)
    {
        $this->onQueue('email');
        $this->user = $user;
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

    /**
     * Get the mail representation of the notification.
     */

    public function toMeliPayamakSms($notifiable)
    {
        $oid = $this->order->id;
        return [
            'to' => $notifiable->mobile,
            'text' => "$oid;$this->orderDitail",
            'bodyId' => env('MELIPAYAMAK_INFORM_ADMIN_NEW_BUY'),
        ];
    }
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->markdown('emails.inform-user-purchase', [
            'user' => $this->user,
            'order'=> $this->order
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
}
