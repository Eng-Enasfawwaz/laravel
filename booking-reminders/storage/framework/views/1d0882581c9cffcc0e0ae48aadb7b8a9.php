<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
</head>
<body>
    <h1>Create a New Booking</h1>
    <form action="<?php echo e(route('bookings.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="user_id">User:</label>
        <select name="user_id" id="user_id" required>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</html><?php /**PATH C:\Users\orange\booking-reminders\resources\views/bookings/create.blade.php ENDPATH**/ ?>