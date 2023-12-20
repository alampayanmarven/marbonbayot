<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Motorcycle</title>

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

        .form-container {
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

        .delete {
            padding: 12px;
            background-color: #e40000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .delete:hover {
            background-color: #8d1414;
        }
    </style>
</head>
<body>
    <h1>Edit Motorcycle</h1>
    @if ($motorcycle)



    <div class="form-container">
        <form action="{{url('/motorcycle/update', ['id' => $motorcycle->id])}}" method="post">
            @csrf
            @method('POST')


            <label for="vehicle_model">Vehicle Model:</label>
            <input type="text" id="vehicle_model" name="vehicle_model" value="{{ $motorcycle->vehicle_model }}" required>

            <label for="engine_size">Engine Size:</label>
            <input type="text" id="engine_size" name="engine_size" value="{{ $motorcycle->engine_size }}" required>

            <button type="submit">Update Motorcycle</button>
        </form>
        <a href="{{url('/motorcycle/delete', $motorcycle->id)}}" class="button">
            <button class="delete" onclick="return confirm('Are you sure to delete this?')">Delete</button>
        </a>

    </div>
    @endif

    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
