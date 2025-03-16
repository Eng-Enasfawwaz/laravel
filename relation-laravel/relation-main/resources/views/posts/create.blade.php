<h1>Add New posts</h1>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <label for="title">title:</label>
        <input type="text" id="title" name="title" required><br><br>


        <label for="body">body:</label>
        <input type="text" id="body" name="body" required><br><br>

        <label for="user_id">users:</label>
        <select id="user_id" name="user_id" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
