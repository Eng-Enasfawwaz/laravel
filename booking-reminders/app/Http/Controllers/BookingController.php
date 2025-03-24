<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    // Show the form to create a booking
    public function create()
    {
        $users = User::all(); // Fetch all users (for demo purposes)
        return view('bookings.create', compact('users'));
    }

    // Store a new booking
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'booking_date' => 'required|date',
            'reminder_time' => 'nullable|integer|min:1',
        ]);

        Booking::create([
            'user_id' => $request->user_id,
            'booking_date' => $request->booking_date,
            'reminder_time' => $request->reminder_time ?? 24, // Default to 24 hours
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }

    // Show all bookings
    public function index()
    {
        $bookings = Booking::with('user')->get();
        return view('bookings.index', compact('bookings'));
    }

    // Show the form to edit a booking
    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    // Update a booking (for setting reminder time)
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'reminder_time' => 'required|integer|min:1',
        ]);

        $booking->update([
            'reminder_time' => $request->reminder_time,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Reminder time updated successfully!');
    }
}