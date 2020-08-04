<div class="card mb-3">
    <img src="https://www.arcgis.com/sharing/rest/content/items/6c036c09c490450db100cbf867c7688a/resources/1571940616424.png?w=3340" class="card-img-top" alt="...">
    <div style="overflow-x:auto;" class="card-body">
        <h5 class="card-title">List of Students</h5>
        <p class="card-text">You can find all the information about Students in the system here.</p>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->lastName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>
                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="overflow-x:auto;" class="container table-responsive">
            <div id="pagnation" class="row justify-content-center pagination-sm">
                {{ $students->links() }}
            </div>
        </div>
    </div>