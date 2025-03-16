

    <h1>User Details</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Phone:</strong> {{ $user->phone->number }}</p>
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Back</a>
