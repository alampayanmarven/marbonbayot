<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;

            color: rgb(201, 208, 248)
        }
        li {
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .nav-item {
            background-color: #ffc107;

        }
        .nav-link {
            color: #fff;
        }
        .nav-link:hover {
            color: #fff !important;
            background-color: #007bff;
        }

        .table th, .table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        .table th {
            background-color: #007bff;
            color: #fff;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
   


    <div class="container mt-5">
        @yield('content')
    </div>

    </body>