
<h1> Create New crud </h1>

<form action="{{route('crud.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="phone">phone:</label>
    <input type="text" id="phone" name="phone" required><br><br>

    <label for="location">location:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="email">email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Submit</button>

</form>
