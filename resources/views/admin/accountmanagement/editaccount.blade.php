<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Tài Khoản</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* CSS của bạn ở đây */
        form {
            max-width: 500px; 
            margin: 20px auto; 
            padding: 20px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            background-color: #f9f9f9; 
        }
        .form-group {
            margin-bottom: 15px; 
        }
        label {
            font-weight: bold; 
            margin-bottom: 5px; 
            display: block; 
        }
        .form-control {
            width: 100%; 
            padding: 5px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            font-size: 16px; 
        }
        .btn {
            background-color: #007bff; 
            color: white; 
            padding: 10px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            transition: background-color 0.3s; 
        }
        .btn:hover {
            background-color: #0056b3; 
        }
        .alert {
            padding: 20px; 
            border-radius: 4px; 
            margin-top: 10px; 
        }
        .alert-success {
            background-color: #d4edda; 
            color: #155724; 
            border: 1px solid #c3e6cb; 
        }
        .alert-danger {
            background-color: #f8d7da; 
            color: #721c24; 
            border: 1px solid #f5c6cb; 
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mt-4">Cập Nhật Tài Khoản</h2>
    <form action="{{ route('admin.accountmanagement.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="active">Trạng Thái</label>
            <select class="form-control" id="active" name="active" required>
                <option value="1" {{ $user->active == 1 ? 'selected' : '' }}>Kích Hoạt</option>
                <option value="2" {{ $user->active == 2 ? 'selected' : '' }}>Không Kích Hoạt</option>
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary btn-block">
            <i class="fas fa-save"></i> Cập Nhật
        </button>
        
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
