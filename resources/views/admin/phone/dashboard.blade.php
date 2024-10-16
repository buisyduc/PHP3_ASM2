<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard Admin</title>
</head>
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
}

.summary {
    display: flex;
    justify-content: space-between;
}

.card {
    background: #007bff;
    color: white;
    padding: 20px;
    border-radius: 8px;
    flex: 1;
    margin: 0 10px;
    text-align: center;
}

.category-stats, .latest-products {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

footer {
    text-align: center;
    margin-top: 20px;
    color: #666;
}

</style>
<body>
    
    <div class="container">
        <header>
            <h1>Dashboard Quản Trị</h1>
            
        </header>
        <div style="padding: 10px">
            <a href="{{route('admin.accountmanagement.account')}}" class="btn btn-primary">Quản lý tài khoản</a>
        </div>
        <div style="padding: 10px">
            <a href="{{route('admin.category.categorymanagement')}}" class="btn btn-primary">Quản lý danh muc</a>
        </div>
     



        <section class="summary">
            <div class="card">
                <h2>Tổng số sản phẩm</h2>
                <p id="total-products">{{$totalPhone}}</p>
            </div>
            <div class="card">
                <h2>Tổng số danh mục</h2>
                <p id="total-categories">{{$totalCategories}}</p>
            </div>
            
        </section>

        <section class="category-stats">
            <h2>Thống Kê Danh Mục</h2>
            <table>
                <thead>
                    <tr>
                        <th>Danh Mục</th>
                        <th>Tổng Sản Phẩm</th>
                    </tr>
                </thead>
                <tbody id="category-table">
                    @foreach ($categories as $cate)
                        <tr>
                            <td>{{ $cate->name }}</td>
                            <td>{{ $cate->phones_count }}</td> <!-- Hiển thị tổng số điện thoại -->
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </section>

        <section class="latest-products">
            <h2>Sản Phẩm </h2>
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div> 
            @endif
            <ul id="latest-products-list">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">TIÊU ĐỀ </th>
                            <th scope="col">HÌNH ẢNH </th>
                            <th scope="col">MÔ TẢ SẢN PHẨM </th>
                            <th scope="col">GIÁ SẢN PHẨM</th>
                            <th scope="col">SỐ LƯỢNG TỒN KHO</th>
                            <th scope="col">MÃ SẢN PHẨM</th>
                            <th scope="col">DANH MỤC</th>
                            <th scope="col">
                                <a href="{{route('admin.phone.create')}}" class="btn-custom ">PHONE NEW</a>
                            </th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listPhone as $index => $phone)
                            <tr>
                                <th scope="row">{{$index + 1}}</th>
                                <td>{{$phone->title}}</td>
                                <td><img style="width: 60px" src="{{ asset('storage/' . $phone->image) }} " alt="image"></td>
                                <td>{{$phone->description}}</td>
                                <td>{{$phone->price}}</td>
                                <td>{{$phone->stock}}</td>
                                <td>{{$phone->sku}}</td>
                                <td>{{$phone->category->name}}</td>
                               
                                <td class="d-flex gap-1" style="padding: 35px">
                                    <a href="{{route('admin.phone.edit',$phone)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('admin.phone.destroy',$phone)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-danger" onclick="return confirm('ban co chac chan muon xoa phone khong?')" >Delete</button>
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
