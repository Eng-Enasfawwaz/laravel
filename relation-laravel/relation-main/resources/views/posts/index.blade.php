<a href="{{ route('post.create') }}">Create post</a>

<table class="table">
    <thead>
        <tr>
            <th>title</th>
            <th>body</th>
            <th>user</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->user->name }}</td>
                <td>
                    <a href="{{ route('post.show', $post->id) }}">View</a>
                    
                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>

                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
