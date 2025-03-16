<h1>{{ $post->title }}</h1>

    <p><strong>user:</strong> {{ $post->user->name }}</p>

    <a href="{{ route('post.index') }}">Back to posts</a>
    <a href="{{ route('post.edit', $post->id) }}">Edit Student</a>

    <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete post</button>
    </form>
