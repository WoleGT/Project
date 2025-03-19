<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VisaBookingNotification extends Notification
{   
    public $name;
    public $email;
    public $phone_number;
    public $visa_type;
    public $date;
    public $time;


    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($name,$email,$phone_number,$visa_type,$date,$time)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->visa_type = $visa_type;
        $this->date = $date;
        $this->time = $time;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->view('email.booking',['name'=> $this->name, 'email'=> $this->email, 'phone_number'=> $this->phone_number, 'visa_type' => $this->visa_type, 'date'=> $this->date, 'time' => $this->time]);
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
