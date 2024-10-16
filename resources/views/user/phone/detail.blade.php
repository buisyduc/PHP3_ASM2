<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Sản Phẩm</title>
    @extends('user.layout.index')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Chi tiết Điện Thoại</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $phone->image) }}" alt="image" class="thumbnail">
        </div>
        <div class="col-md-8">
            <h1 class="product-title">{{ $phone->title }}</h1>
            <p class="product-description"><strong>Mô tả sản phẩm:</strong> {{ $phone->description }}</p>
            <p class="product-price"><strong>Giá sản phẩm:</strong> {{ number_format($phone->price, 0, ',', '.') }} VNĐ</p>
            <p><strong>Số lượng tồn kho:</strong> {{ $phone->stock }}</p>
            <p><strong>Mã sản phẩm:</strong> {{ $phone->sku }}</p>
            <p><strong>Thương hiệu:</strong> {{ $phone->brand }}</p>
            <p><strong>Mẫu điện thoại:</strong> {{ $phone->model }}</p>
            <p><strong>Hệ điều hành:</strong> {{ $phone->operating_system }}</p>
            <p><strong>Kích thước màn hình:</strong> {{ $phone->screen_size }}</p>
            <p><strong>Độ phân giải:</strong> {{ $phone->resolution }}</p>
            <p><strong>Dung lượng pin:</strong> {{ $phone->battery_capacity }}</p>
            <p><strong>Bộ nhớ RAM:</strong> {{ $phone->ram }}</p>
            <p><strong>Dung lượng lưu trữ:</strong> {{ $phone->storage }}</p>
            <p><strong>Thông tin về camera:</strong> {{ $phone->camera }}</p>
            <p><strong>Màu sắc:</strong> {{ $phone->color }}</p>
            <p><strong>Trọng lượng:</strong> {{ $phone->weight }}</p>
            <p><strong>Kích thước:</strong> {{ $phone->dimensions }}</p>
            <p><strong>Danh mục:</strong> {{ $phone->category->name }}</p>
        </div>
    </div>
    <a href="{{ route('user.phone.home') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection

<style>
    body {
        background-color: #f4f4f4; 
        font-family: Arial, sans-serif; 
        margin: 0; 
        padding: 20px; 
    }

    .container {
        max-width: 800px; 
        margin: auto; 
        background-color: white; 
        padding: 30px; 
        border-radius: 10px; 
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
    }

    h1.product-title {
        margin-bottom: 20px; 
        color: #333; 
        font-size: 1.8em; 
        font-weight: bold; 
    }

    .thumbnail {
        width: 100%; 
        height: auto; 
        border-radius: 10px; 
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); 
        margin-bottom: 20px; 
    }

    p {
        font-size: 16px; 
        color: #555; 
        margin: 10px 0; 
    }

    strong {
        color: #007bff; 
    }

    .btn {
        display: inline-block; 
        padding: 12px 20px; 
        margin-top: 20px; 
        background-color: #007bff; 
        color: white; 
        text-decoration: none; 
        border-radius: 5px; 
        transition: background-color 0.3s; 
        border: none; 
        font-size: 16px; 
    }

    .btn:hover {
        background-color: #0056b3; 
    }
</style>
</head>
<body>
</body>
</html>
