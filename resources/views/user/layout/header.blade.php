<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgb(20, 16, 16);
            z-index: 1000;
        }
        .navbar {
            background-color: black;
        }
        .navbar .nav-link, .navbar .navbar-brand {
            color: white;
        }
        .navbar .nav-link:hover, .navbar .navbar-brand:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="{{route('user.phone.home')}}">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tài khoản
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('admin.login')}}">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.register')}}">Đăng ký</a></li>
                              
                              
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-light" href="{{route('admin.register')}}">Đăng ký ngay</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
