
    <h1>Create New User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Phone Number:</label>
            <input type="text" name="phone_number" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
