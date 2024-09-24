<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Internal CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #4CAF50; /* Green color for welcome message */
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .button {
            background-color: #4CAF50; /* Green background */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>

        <!-- Check if session data exists and display the name and city -->
        @if(session('name') && session('city'))
            <p><strong>Name:</strong> {{ session('name') }}</p>
            <p><strong>City:</strong> {{ session('city') }}</p>
        @endif

        <!-- Button to show data
        <button class="button" onclick="window.location.href='/show-data'">Show Data</button> -->
    </div>
</body>
</html>
