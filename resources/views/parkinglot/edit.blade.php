<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parking Lot</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ecd1d1;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 8px;
            background-color: #fff;
            width: 1000px;
            max-width: 600px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-right: 20px;
        }

        label {
            margin-bottom: 8px;
            color: #333;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 12px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .delete {
            padding: 12px;
            background-color: #e40000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete:hover {
            background-color: #8d1414;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tbody td {
            background-color: #fff;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            margin-top: 20px;
        }

        a:hover {
            color: #0056b3;
        }
        .delete{
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Edit Parking Lot</h1>

    @if($parkinglot)
    <div class="container">
        <form action="{{ url('/parkinglot/update', ['id' => $parkinglot->id]) }}" method="post">

            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{$parkinglot->name}}" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{$parkinglot->location}}" required>

            <label for="capacity">Capacity:</label>
            <input type="number" id="capacity" name="capacity" value="{{$parkinglot->capacity}}" required>

            <button type="submit">Save</button>
        </form>

            <a href="{{url('/parkinglot/delete', $parkinglot->id)}}" class="button">
                <button class="delete" onclick="return confirm('Are you sure to delete this?')">Delete</button>
            </a>

    </div>
    @endif

    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
