<!-- resources/views/motorcycle/create.blade.php -->

@extends('app.base') <!-- Assuming you have a master layout, adjust as needed -->

@section('content')
    <h1>Add New Car</h1>

    <form method="POST" action="{{ route('car.store') }}">

        @csrf
        <div>
            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand" required>
        </div>

        <div>
            <label for="horse_power">Horse Power:</label>
            <input type="text" id="horse_power" name="horse_power" required>
        </div>

        <div>
            <button type="submit">Add Car</button>
        </div>
    </form>

   <center>
    <a href="{{ url('/car/index') }}">Back to Car </a>
   </center>


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
            height: 100vh;
        }

        h1 {
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            overflow-x: auto;
            width: 300px; /* Adjust the width as needed */
            margin-left: 500px;
        }

        label {
            margin-bottom: 8px;
            color: #333;
            display: block;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%; /* Make the input fill the container */
        }

        button {
            padding: 12px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            margin-top: 20px;
            display: block;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
@endsection
