<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
    <!-- Liên kết tới Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
      
            background-color: #fafbf9;
        }
        .register-container {
            max-width: auto;
            margin: 20px; /* Center the container and add margin */
            padding: 60px;
            background-color: white;
            border: 10px;
            border: 1px solid #ddd; /* Add a border */
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    @extends('user.layout.index')
    @section('content')
    <div class="register-container">
        <h2 class="text-center">Đăng Ký</h2>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div> 
        @endif
        <form action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
                <label for="username">Tên Người Dùng</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên người dùng" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">Hiện</button>
                    </div>
                </div>
            </div>
           
            <div class="form-group d-none">
                <label for="role">Vai Trò</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group d-none">
                <label for="active">Trạng Thái</label>
                <select class="form-control" id="active" name="active" required>
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
        </form>
        
        <button type="button" class="mt-3 btn btn-primary text-white" onclick="window.location='{{ route('admin.login') }}'">
            Đăng nhập
        </button>
        
    </div>

    <!-- Liên kết tới Bootstrap JS và jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const toggleButton = this;

            // Thay đổi type của input giữa password và text
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = 'Ẩn';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = 'Hiện';
            }
        });
    </script>
    @endsection
</body>
</html>
