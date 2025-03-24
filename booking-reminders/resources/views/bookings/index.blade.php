<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Bookings</title>
</head>
<body>
    <h1>All Bookings</h1>
    <table border="1">
        <thead>
            <tr>
                <th>User</th>
                <th>Booking Date</th>
                <th>Reminder Time (hours)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->reminder_time }}</td>
                    <td>
                        <a href="{{ route('bookings.edit', $booking->id) }}">Edit Reminder</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>