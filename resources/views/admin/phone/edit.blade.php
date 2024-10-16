<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>EDIT PHONE</title>
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
        <h1>UPDATE</h1>
        <form action="{{route('admin.phone.update',$phone)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         
            <div class="mb-3">
                <label for="title" class="form-label required">TIÊU ĐỀ</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$phone->title}}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label required">HÌNH ẢNH</label>
                <input type="file" class="form-control" id="image" name="image"  required>
                <td><img src="{{ asset('storage/' . $phone->image) }} " width="60" alt="{{$phone->title}}"></td>

            </div>

            <div class="mb-3">
                <label for="description" class="form-label required">MÔ TẢ SẢN PHẨM</label>
                <input type="text" class="form-control" id="description" name="description" style="height: 100px" value="{{$phone->description}}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label required">GIÁ SẢN PHẨM</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$phone->price}}" required>
            </div>
            
            <div class="mb-3">
                <label for="stock" class="form-label required">SỐ LƯỢNG TỒN KHO</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{$phone->stock}}" required>
            </div>

            <div class="mb-3">
                <label for="sku" class="form-label required">MÃ SẢN PHẨM</label>
                <input type="text" class="form-control" id="sku" name="sku" value="{{$phone->sku}}" required>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">THƯƠNG HIỆU</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{$phone->brand}}">
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">MẨU ĐIỆN THOẠI</label>
                <input type="text" class="form-control" id="model" name="model" value="{{$phone->model}}">
            </div>

            <div class="mb-3">
                <label for="operating_system" class="form-label">HỆ ĐIỀU HÀNH</label>
                <input type="text" class="form-control" id="operating_system" name="operating_system" value="{{$phone->operating_system}}">
            </div>

            <div class="mb-3">
                <label for="screen_size" class="form-label">KÍCH THƯỚC MÀN HÌNH</label>
                <input type="text" class="form-control" id="screen_size" name="screen_size" value="{{$phone->screen_size}}">
            </div>

            <div class="mb-3">
                <label for="resolution" class="form-label">ĐỘ PHÂN GIẢI</label>
                <input type="text" class="form-control" id="resolution" name="resolution" value="{{$phone->resolution}}">
            </div>

            <div class="mb-3">
                <label for="battery_capacity" class="form-label">DUNG LƯỢNG PIN</label>
                <input type="text" class="form-control" id="battery_capacity" name="battery_capacity" value="{{$phone->battery_capacity}}">
            </div>

            <div class="mb-3">
                <label for="ram" class="form-label">BỘ NHỚ RAM</label>
                <input type="text" class="form-control" id="ram" name="ram" value="{{$phone->ram}}">
            </div>

            <div class="mb-3">
                <label for="storage" class="form-label">DUNG LƯỢNG LƯU TRỮ</label>
                <input type="text" class="form-control" id="storage" name="storage" value="{{$phone->storage}}">
            </div>

            <div class="mb-3">
                <label for="camera" class="form-label">THÔNG TIN VỀ CAMERA</label>
                <input type="text" class="form-control" id="camera" name="camera" value="{{$phone->camera}}">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">MÀU SẮC</label>
                <input type="text" class="form-control" id="color" name="color" value="{{$phone->color}}">
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">TRỌNG LƯỢNG</label>
                <input type="text" class="form-control" id="weight" name="weight" value="{{$phone->weight}}">
            </div>

            <div class="mb-3">
                <label for="dimensions" class="form-label">KÍCH THƯỚC</label>
                <input type="text" class="form-control" id="dimensions" name="dimensions" value="{{$phone->dimensions}}">
            </div>

            <div class="mb-3">
                <label class="form-label required">DANH MỤC</label>
                <select name="category_id" class="form-control" required>
                    @foreach ($Categories as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
