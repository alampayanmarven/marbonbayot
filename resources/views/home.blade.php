<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Add Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
            color: #291f1f;
            margin-bottom: 20px;
        }

        div {
            background-color: #b8afaf;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            padding: 70px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            display: flex;
            align-items: center;
            padding: 10px;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #0056b3;
        }

        .home-icon {
            margin-right: 10px;
        }
    </style>
</head>


<body>
    <h1>Welcome Part</h1>

    <div>
        <ul>
            <li>
                <a href="{{ url('parkinglot/show') }}">
                    <i class="fas fa-home home-icon"></i> Parking Lots
                </a>
            </li>
            <li>
                <a href="{{ url('motorcycle/index') }}">
                    <i class="fas fa-home home-icon"></i> Motorcycles
                </a>
            </li>
            <li>
                <a href="{{ url('car/index') }}">
                    <i class="fas fa-home home-icon"></i> Cars
                </a>
            </li>
        </ul>
    </div>
</body>
</html>
