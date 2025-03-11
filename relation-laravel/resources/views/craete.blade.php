<form action="{{ route('one.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone_number" placeholder="Phone Number" required>
    <button type="submit">Create User</button>
</form>
