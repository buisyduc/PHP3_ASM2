<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Tài Khoản</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            padding: 20px;
        }
        .card {
            margin: 20px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mt-4">Thông Tin Tài Khoản</h2>

    
        
    <div class="card">
        <div class="card-header">
            <h5>Chi tiết tài khoản</h5>
        </div>
        <div class="card-body">
            <p><strong>Tên người dùng:</strong> {{ $user->username }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Vai trò:</strong> {{ $user->role }}</p>
            <p><strong>Trạng thái:</strong> {{ $user->active == 1 ? 'Kích Hoạt' : 'Không Kích Hoạt' }}</p>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('admin.login') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
  

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
