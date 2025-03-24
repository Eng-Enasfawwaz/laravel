<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingReminder extends Notification implements ShouldQueue
{
    use Queueable;

    protected $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Booking Reminder: Your Appointment is Soon')
            ->line("Hello {$notifiable->name},")
            ->line("This is a reminder for your booking on {$this->booking->booking_date}.")
            ->action('View Booking', url('/bookings/' . $this->booking->id))
            ->line('Thank you for using our service!');
    }
}