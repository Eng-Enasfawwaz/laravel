<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use App\Notifications\BookingReminder;
use Carbon\Carbon;

class SendBookingReminders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Send booking reminders to users';

    public function handle()
    {
        $bookings = Booking::where('reminder_sent', false)
            ->where('booking_date', '>', now())
            ->get();

        foreach ($bookings as $booking) {
            $reminderTime = Carbon::parse($booking->booking_date)->subHours($booking->reminder_time);

            if (now() >= $reminderTime) {
                $booking->user->notify(new BookingReminder($booking));
                $booking->update(['reminder_sent' => true]);
            }
        }

        $this->info('Booking reminders sent successfully.');
    }
}