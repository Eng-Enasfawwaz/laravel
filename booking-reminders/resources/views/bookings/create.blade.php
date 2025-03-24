<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
</head>
<body>
    <h1>Create a New Booking</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <label for="user_id">User:</label>
        <select name="user_id" id="user_id" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="booking_date">Booking Date:</label>
        <input type="datetime-local" name="booking_date" id="booking_date" required>
        <br>
        <label for="reminder_time">Reminder Time (hours before booking):</label>
        <input type="number" name="reminder_time" id="reminder_time" value="24">
        <br>
        <button type="submit">Create Booking</button>
    </form>
</body>
</html>