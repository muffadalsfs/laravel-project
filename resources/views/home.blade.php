<style>
/* Container styling */
.container {
    margin: 0 auto;
    padding: 20px;
    max-width: 900px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Header styling */
.container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    font-size: 24px;
    font-weight: bold;
}
.container h1 {
    text-align: right;
    margin-bottom: 20px;
    color: #333;
    font-size: 24px;
    font-weight: bold;
}


/* Table styling */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.table thead th {
    background-color: #007bff;
    color: white;
    padding: 10px;
    text-align: center;
}

.table tbody td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

/* Row hover effect */
.table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Image styling */
.table tbody img {
    border-radius: 5px;
    object-fit: cover;
}

/* Alternate row colors */
.table tbody tr:nth-child(odd) {
    background-color: #f7f7f7;
}

/* Responsive image size */
.table tbody img {
    width: 50px;
    height: 50px;
}

/* No Image text styling */
.table tbody td:empty {
    color: #888;
    font-style: italic;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }

    .table {
        font-size: 14px;
    }

    .table tbody img {
        width: 40px;
        height: 40px;
    }
}
</style>

<div>
    hello

    <div class="container">
    <h2>Student List</h2>
    <h1><a href="from">add new student</a></h1>
    @if($students->isEmpty())
        <p>No students found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Image</th>
                    <th>operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->city }}</td>
                        <td>{{ $student->country }}</td>
                        <td>
                            @if($student->path)
                                <img src="{{ asset('storage/' . $student->path) }}" alt="Image" style="width:50px; height:auto;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{'delete/'.$student->id}}">delete</a>
                            <a href="{{'edit/'.$student->id}}">Edit</a>

                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>



    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
