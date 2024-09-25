
<!-- resources/views/students/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], input[type="tel"] {
            display: block;
            width: 10%;
            padding: 8px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <h1>Edit Student</h1>

    <!-- Success Message -->
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <!-- Edit Form -->
    <form action="edits/{{$student->id}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="{{ $student->id }}" readonly>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" value="{{ old('phone', $student->phone) }}">

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ old('city', $student->city) }}">

        <input type="submit" value="Update">
        <a href="/list">cancel</a>
    </form>
</body>
</html>
