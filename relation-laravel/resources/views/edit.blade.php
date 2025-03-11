<form action="{{ route('one.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}" required>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <input type="text" name="phone_number" value="{{ $user->phone->phone_number }}" required>
    <button type="submit">Update User</button>
</form>
