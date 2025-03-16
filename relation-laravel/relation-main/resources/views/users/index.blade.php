


    <h1>Users</h1>
    <a href="{{ route('user.create') }}" class="btn btn-success">Create New User</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone->number }}</td>
                    <td>
                        <a href="{{ route('user.show', $user) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('user.edit', $user) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('user.destroy', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
