<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .summary {
            text-align: center;
           
            width: 1160px;
            display: flex;
            justify-content: space-between;
        }

        .card {
            background: #007bff;
            color: white;
            padding: 10px;
            border-radius: 8px;
            flex: 1;
            margin: 0 10px;
            text-align: center;
        }

        .table {
            width: 1100px;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
            transition: background-color 0.3s;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }

        .alert {
            margin-top: 20px;
        }

        .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <header>
            <h1>Dashboard Quản Trị</h1>
        </header>
        <div style="padding: 10px">
            <a href="{{ route('admin.phone.dashboard') }}" class="btn btn-primary">Quản lý sản phẩm</a>
        </div>

        <section class="summary">
            <div class="card">
                <h2>Tổng số tài khoản</h2>
                <p id="total-products">{{ $totalUser }}</p>
            </div>
        </section>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <section class="summary">
            <ul id="latest-products-list">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">TÊN NGƯỜI DÙNG</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">MẬT KHẨU</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">ACTIVE</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listUser as $index => $user)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>******</td> <!-- Chỉ hiển thị dấu hoa thị cho mật khẩu -->
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->active == 1 ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
                                <td class="d-flex gap-1" style="padding: 35px">
                                    <a href="{{ route('admin.accountmanagement.editaccount', $user) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin.accountmanagement.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản không?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </ul>
        </section>

        <footer>
            <p>© 2024 Dashboard Quản Trị</p>
        </footer>
    </div>

    <script src="script.js"></script>
</body>
</html>
