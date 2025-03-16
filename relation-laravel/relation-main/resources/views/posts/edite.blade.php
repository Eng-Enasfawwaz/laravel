<h1>Edit posts</h1>

    <form action="{{ route('posts.update', $posts->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $posts->title) }}" required><br><br>
        
        <label for="body">body:</label>
        <input type="text" id="body" name="body" value="{{ old('body', $posts->body) }}" required><br><br>


        <label for="user_id">users:</label>
        <select id="user_id" name="user_id" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $user->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update post</button>
    </form>

    <a href="{{ route('posts.index') }}">Back to post</a>