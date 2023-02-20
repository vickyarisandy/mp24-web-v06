<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
// use Notification;

class PasienKeDokter extends Notification 
{
    use Queueable;
    
    private $orderPasienkeDokter;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($orderPasienkeDokter)
    {
        //
        $this->orderPasienkeDokter = $orderPasienkeDokter;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');

                    // return (new MailMessage)
                    // ->name($this->orderPasienkeDokter['name'])
                    // ->line($this->orderPasienkeDokter['body'])
                    // ->action($this->orderPasienkeDokter['orderText'], $this->orderPasienkeDokter['orderUrl'])
                    // ->line($this->orderPasienkeDokter['thanks']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'user_id' => $this->orderPasienkeDokter['user_id'],
            'user_name' => $this->orderPasienkeDokter['name'],
            'user_email' => $this->orderPasienkeDokter['email'],
            'user_pesan' => $this->orderPasienkeDokter['pesan'],
        ];
    }
}
