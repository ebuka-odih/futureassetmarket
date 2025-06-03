<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewUserRegistered extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New User Registration Notification')
                    ->greeting('Hello Admin,')
                    ->line('A new user has registered on ' . env('APP_NAME') . '.')
                    ->line('User Name: ' . $this->user->name)
                    ->line('User Email: ' . $this->user->email)
                    ->line('Please review their profile in the admin dashboard.')
                    ->action('Go to Admin Dashboard', url('/admin/users'))
                    ->line('Thank you for managing ' . env('APP_NAME') . '!');
    }

    public function toArray($notifiable)
    {
        return [
            'user_id' => $this->user->id,
            'email' => $this->user->email,
        ];
    }
}
