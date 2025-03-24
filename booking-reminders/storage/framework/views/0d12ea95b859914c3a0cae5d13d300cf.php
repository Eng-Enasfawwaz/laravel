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
            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($booking->user->name); ?></td>
                    <td><?php echo e($booking->booking_date); ?></td>
                    <td><?php echo e($booking->reminder_time); ?></td>
                    <td>
                        <a href="<?php echo e(route('bookings.edit', $booking->id)); ?>">Edit Reminder</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\orange\booking-reminders\resources\views/bookings/index.blade.php ENDPATH**/ ?>