<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>

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
    <h1>Edit Car</h1>

    @if($car)
    <div class="container">
        <form action="{{ url('/car/update', ['id' => $car->id]) }}" method="post">

            @csrf
            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand" value="{{$car->brand}}" required>

            <label for="horse_power">Horse_power:</label>
            <input type="text" id="horse_power" name="horse_power" value="{{$car->horse_power}}" required>

            <button type="submit">Save</button>
        </form>

            <a href="{{url('/car/delete', $car->id)}}" class="button">
                <button class="delete">Delete</button>
            </a>

    </div>
    @endif

    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
