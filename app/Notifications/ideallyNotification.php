<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;
use Illuminate\Notifications\Messages\MailMessage;

class ideallyNotification extends VerifyEmailNotification
{
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('Verifikasi Email')
            ->line('Terima kasih atas pendaftaran Anda!')
            ->line('Klik tombol di bawah untuk verifikasi email Anda.')
            ->action('Verifikasi Email', $verificationUrl)
            ->line('Jika Anda tidak mendaftar, Anda dapat mengabaikan email ini.');
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
            //
        ];
    }
}
