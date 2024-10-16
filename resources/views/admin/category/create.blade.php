<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CREATE NEW</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f0f4f8;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        h1 {
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-custom:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .form-label {
            font-weight: bold;
            color: #343a40;
        }

        input[type="text"], input[type="number"], input[type="date"], input[type="file"], select {
            border-radius: 8px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="number"]:focus, input[type="date"]:focus, select:focus {
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .required:after {
            content: " *";
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CREATE NEW</h1>
        <form action="{{route('admin.category.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label required">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

           

            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
