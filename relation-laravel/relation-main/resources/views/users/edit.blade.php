


    <h1>Edit User</h1>
    <form action="{{ route('user.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label>Phone Number:</label>
            <input type="text" name="phone_number" value="{{ $user->phone->number }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
