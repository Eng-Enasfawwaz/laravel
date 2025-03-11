<h1>Show all cruds</h1>
<button><a href="{{ route('crud.create') }}">Add New</a></button><br /><br /><br />


<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>name</th>  
            <th>phone</th>  
            <th>location</th>  
            <th>email</th>  
            <th>action</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($cruds as $crud)
            <tr> 
                <td>{{ $crud->id }}</td>
                <td>{{ $crud->name }}</td>
                <td>{{ $crud->phone }}</td>
                <td>{{ $crud->location }}</td>
                <td>{{ $crud->email }}</td>
                <td>
                    <a href="{{ route('crud.edit', $crud->id) }}">Edit</a>

                    <form action="{{ route('crud.destroy', $crud->id) }}" method="POST" >
                        @csrf
                        @method('DELETE') 
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr> 
        @endforeach 
    </tbody>
</table>