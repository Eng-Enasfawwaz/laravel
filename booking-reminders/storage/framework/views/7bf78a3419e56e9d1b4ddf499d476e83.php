<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
</head>
<body>
    <h1>Edit Booking Reminder</h1>
    <form action="<?php echo e(route('bookings.update', $booking->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="reminder_time">Reminder Time (hours before booking):</label>
        <input type="number" name="reminder_time" id="reminder_time" value="<?php echo e($booking->reminder_time); ?>">
        <br>
        <button type="submit">Update Reminder</button>
    </form>
</body>
</html><?php /**PATH C:\Users\orange\booking-reminders\resources\views/bookings/edit.blade.php ENDPATH**/ ?>