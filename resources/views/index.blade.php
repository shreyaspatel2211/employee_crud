<div class="container">
    <h1>Users List</h1>
    <a href="{{ route('employee.create')}}" class="btn btn-primary">Add New Employee</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->country_code }} {{ $employee->mobile_number }}</td>
                    <td>{{ $employee->gender }} </td>
                    <td>@foreach($employee->hobbies as $hobby) 
                        <span>{{ $hobby }}</span> 
                        @endforeach
                        </td>
                    <td>
                        <a href="{{ route('employee.edit', $employee)}}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('employee.destroy', $employee)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" clas="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>