<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trang chủ</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none; /* Không có viền cho card */
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Thêm bóng đổ khi hover */
        }
        .carousel-item img {
            height: 600px;
            object-fit: cover;
        }
        .carousel-inner {
            max-width: 100%;
            margin: 0 auto;
        }
        .thumbnail {
            height: 200px; 
            overflow: hidden; 
            border-radius: 10px; /* Bo tròn các góc của hình ảnh */
        }
        .thumbnail img {
            height: 100%; 
            object-fit: cover; 
            transition: transform 0.3s; 
        }
        .thumbnail:hover img {
            transform: scale(1.1); /* Phóng to hình ảnh khi hover */
        }
        .card-body {
            background-color: #ffffff; 
            padding: 20px; 
            border-radius: 10px; /* Bo tròn các góc cho card body */
        }
        h2 {
            color: #333; 
        }
        .btn-primary {
            background-color: #007bff; 
            border: none; 
            transition: background-color 0.3s; 
        }
        .btn-primary:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    @extends('user.layout.index')
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('banner/789dc446-bannerweb_vsmart_1920x1080.jpg')}}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('banner/90641371_236867667705801_1425634700789022720_n.jpg')}}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('banner/609fa7b53c435fb27393587d_dd5787fa0c9306323b7176ce91a4d31ff6041c4a2.jpg')}}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sản phẩm nổi bật</h2>
        <div class="row g-4">
            @foreach ($listPhones as $phone)
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="thumbnail">
                            <img src="{{ asset('storage/' . $phone->image) }}" alt="image">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $phone->title }}</h5>
                            <p class="card-text">{{ number_format($phone->price, 0, ',', '.') }} VNĐ</p>
                            <a href="{{ route('user.phone.detail', $phone->id) }}" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
