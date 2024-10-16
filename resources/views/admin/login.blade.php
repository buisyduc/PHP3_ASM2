<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Đăng nhập</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: auto; /* Set a max width for the container */
            margin: 50px auto; /* Center the container */
            padding: 40px;
            background-color: white;
            border: 1px solid #ddd; /* Add a border */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
    </style>
</head>
<body>
    @extends('user.layout.index')
    @section('content')
    <div class="login-container">
        <h2 class="text-center">Đăng nhập vào quản trị</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div> 
        @endif
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">Hiện</button>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
            
        </form>
        <a href="" style="margin-top:5px " class="btn btn-primary">Quen mat khau</a>
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
