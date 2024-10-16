<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <title>LIST</title>
    <style>
         .btn-custom {
        background-color: #4CAF50; /* Green */
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-custom:hover {
        background-color: #45a049; /* Darker green */
    }

    .btn-danger-custom {
        background-color: #f44336; /* Red */
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-danger-custom:hover {
        background-color: #da190b; /* Darker red */
    }

    /* Table cell styling */
    td {
        padding: 10px;
        text-align: center;
    }
            .btn-custom {
        background-color: rgb(255, 0, 204); /* Màu nền tùy chỉnh */
        color: white; /* Màu chữ */
        border: none; /* Không có đường viền */
        border-radius: 8px; /* Bo tròn */
        padding: 12px 20px; /* Khoảng cách bên trong */
        font-size: 16px; /* Kích thước chữ */
        cursor: pointer; /* Hiệu ứng con trỏ */
        transition: background-color 0.3s, transform 0.3s; /* Hiệu ứng chuyển màu và phóng to */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Đổ bóng cho nút */
    }

    .btn-custom:hover {
        background-color: rgb(255, 50, 250); /* Màu nền khi hover */
        transform: scale(1.05); /* Hiệu ứng phóng to khi hover */
    }

    .btn-custom:active {
        transform: scale(0.95); /* Hiệu ứng thu nhỏ khi nhấn */
    }
        body {
            background-color: #f0f4f8; /* Màu nền nhẹ và êm dịu */
        }

        h1 {
            color: #007bff; /* Màu chữ tiêu đề nổi bật */
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
        }

        .table {
            border-radius: 10px; /* Bo tròn cho bảng */
            overflow: hidden; /* Để bo tròn hiển thị đúng */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Đổ bóng cho bảng */
            background-color: white; /* Màu nền trắng cho bảng */
        }

        .table thead {
            background-color: #007bff; /* Màu nền cho tiêu đề */
            color: white; /* Màu chữ tiêu đề */
        }

        .table tbody tr {
            transition: background-color 0.3s; /* Hiệu ứng chuyển màu */
        }

        .table tbody tr:hover {
            background-color: #e9ecef; /* Màu nền khi di chuột */
        }

        img {
            border-radius: 5px; /* Bo tròn cho hình ảnh */
            max-width: 100px; /* Giới hạn kích thước hình ảnh */
            object-fit: cover; /* Đảm bảo hình ảnh không bị méo */
        }

        td {
            vertical-align: middle; /* Căn giữa nội dung trong ô */
        }

        /* Thêm khoảng cách cho các ô */
        .table td, .table th {
            padding: 12px;
            text-align: center; /* Căn giữa văn bản */
        }
        .comeBack{
            display: none;
        }
    </style>
</head>

<body>
    
    <div class="container mt-5">
    
        <div style="padding: 10px">
            <a href="{{ route('admin.phone.dashboard') }}" class="btn btn-primary">Quản lý sản phẩm</a>
        </div>
        <h1>LIST CATEGORY</h1>
        
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}

            </div> 
        @endif
        
        <a href="#">
        </a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">NAME</th>
                    <th scope="col">
                        <a href="{{route('admin.category.create')}}" class="btn-custom">CATEGORY NEW</a>
                    </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listCategorys as $index => $cate)
                    <tr>
                        <th scope="row">{{$index + 1}}</th>
                        <td>{{$cate->name}}</td>
                       
                       
                        <td class="d-flex gap-1" style="padding: 35px">
                            {{-- <a href="{{route('moive.edit',$moive)}}" class="btn btn-primary">Edit</a> --}}
                            <form action="{{route('admin.category.destroy',$category)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger" onclick="return confirm('ban co chac chan muon xoa moive khong?')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
