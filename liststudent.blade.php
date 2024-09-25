<!-- resources/views/bikes/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikes List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>List of Bikes</h1>

    @if($bikes->isEmpty())
        <p>No bikes available.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bikes as $bike)
                    <tr>
                        <td>{{ $bike->id }}</td>
                        <td>{{ $bike->name }}</td>
                        <td>{{ $bike->email }}</td>
                        <td>{{ $bike->phone }}</td>
                        <td>{{ $bike->city }}</td>
                        <td><a href="{{'delete/'.$bike->id}}">delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
