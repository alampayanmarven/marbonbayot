<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Parking Lot</title>

    <div class="row m-5">
    <center>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
            <a href="{{url('/parkinglot/create')}}" class="btn btn-primary me-md-2" type="button">Add Client </a>
    </div>
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
    </style>
</head>
<body>
    <h1>Parking Lot Details</h1>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Capacity</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $parkinglots as $parkinglot)
                <tr>
                    <td>{{ $parkinglot->name }}</td>
                    <td>{{ $parkinglot->location }}</td>
                    <td>{{ $parkinglot->capacity }}</td>
                    <td>

                        <a href="{{url('parkinglot/edit', $parkinglot->id)}}">
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
