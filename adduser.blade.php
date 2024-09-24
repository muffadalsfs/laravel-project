<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Student Form</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="/store-student" method="POST">
        @csrf

        <label for="id">ID:</label>
        <input type="text" name="id" id="id" value="{{ old('id') }}" required>
        <br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        <br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>
        <br><br>

        <button type="submit">Submit</button>
    </form> 

</body>
</html>
