<h2>form edit</h2>

<form action="{{ route('crud.update', $crud->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <label>Name:</label>
    <input type="text" name="name" value="{{ $crud->name }}" required>

    <label> phone:</label>
    <input type="text" name="phone" value="{{ $crud->phone }}">

    <label>location:</label>
    <input type="text" name="location" value="{{ $crud->location }}" required>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $crud->email }}" required>

    <button type="submit">update</button>
</form>