@foreach($users as $user)
    <div>
        <h2>{{ $user->name }}</h2>
        <p>{{ $user->email }}</p>
        <p>{{ $user->phone ? $user->phone->phone_number : 'No phone number' }}</p>
        <a href="{{ route('one.show', $user->id) }}">View</a>
        <a href="{{ route('one.edit', $user->id) }}">Edit</a>
        <form action="{{ route('one.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
