<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle Details</title>
    <div class="row m-5">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{url('/motorcycle/create')}}" class="btn btn-primary me-md-2" type="button">Add</a>
    </div>

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
            color: #333;
            margin-bottom: 20px;
        }

        div {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            overflow-x: auto;
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

        button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Motorcycle Details</h1>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Vehicle Model</th>
                    <th>Engine size</th>
                    <th>Options</th>

                </tr>
            </thead>
            <tbody>
                @foreach( $motorcycles as $motorcycle)
                <tr>
                    <td>{{ $motorcycle->vehicle_model }}</td>
                    <td>{{ $motorcycle->engine_size}}</td>
                    <td>
                        <a href="{{url('/motorcycle/edit',$motorcycle->id)}}">
                            <button>edit</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
