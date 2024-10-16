<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        footer {
            background-color: #343a40; /* Màu nền của footer */
            color: white; /* Màu chữ */
            padding: 40px 0; /* Khoảng cách trên và dưới */
        }
        .footer-top {
            margin-bottom: 20px; /* Khoảng cách giữa footer top và footer license */
        }
        .footer-content {
            margin-bottom: 20px; /* Khoảng cách giữa các cột */
        }
        .header_top-namestore p {
            font-size: 24px; /* Kích thước chữ lớn hơn */
            font-weight: bold; /* Chữ đậm */
            color: #f4f1e8; /* Màu sắc tươi sáng */
            text-align: center; /* Căn giữa */
            margin-bottom: 20px; /* Khoảng cách dưới */
            text-transform: uppercase; /* Viết hoa toàn bộ chữ */
            letter-spacing: 1px; /* Khoảng cách giữa các chữ cái */
        }
        .footer-content p.title-box {
            font-weight: bold; /* Chữ đậm cho tiêu đề */
            margin-bottom: 10px; /* Khoảng cách dưới tiêu đề */
        }
        .footer-content ul {
            list-style-type: none; /* Bỏ dấu đầu dòng */
            padding: 0; /* Bỏ padding */
        }
        .footer-content ul li {
            margin-bottom: 10px; /* Khoảng cách giữa các mục */
        }
        .footer-content-network ul {
            display: flex; /* Sắp xếp các biểu tượng mạng xã hội */
            gap: 15px; /* Khoảng cách giữa các biểu tượng */
        }
        .footer-license {
            text-align: center; /* Căn giữa văn bản */
            background-color: #23272b; /* Màu nền cho phần license */
            padding: 10px 0; /* Khoảng cách trên và dưới */
        }
        .footer-content a {
            color: white; /* Màu chữ cho liên kết */
            text-decoration: none; /* Bỏ gạch chân */
        }
        .footer-content a:hover {
            text-decoration: underline; /* Gạch chân khi hover */
        }
    </style>
    <title>Document</title>
</head>
<body>
    <footer>
        <div class="grid wide footer-top">
            <div class="row">
                <div class="col l-3">
                    <div class="footer-content">
                        <div class="header_top-namestore">
                            <p>CLOTHING STORE</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3">
                    <div class="footer-content">
                        <p class="title-box">LIÊN HỆ</p>
                        <ul>
                            <li><i class="fas fa-home"></i> Trinh Van Bo _ FPT Polytechnic</li>
                            <li><i class="fas fa-phone-alt"></i> +0962350923 - 1800-6886-666</li>
                            <li><i class="fas fa-envelope"></i> chamsocsieuthibia@gmail.com</li>
                            <li><i class="fas fa-map-marker-alt"></i> Hệ thống cửa hàng</li>
                        </ul>
                    </div>
                </div>
                <div class="col l-3">
                    <div class="footer-content">
                        <p class="title-box">VỀ CLOTHING STORE</p>
                        <ul>
                            <li><i class="fas fa-shield-alt"></i> Chính Sách Bảo Mật</li>
                            <li><i class="fas fa-file-contract"></i> Điều khoản sử dụng</li>
                            <li><i class="fas fa-undo"></i> Chính sách đổi trả</li>
                            <li><i class="fas fa-shopping-cart"></i> Hướng dẫn mua hàng</li>
                            <li><i class="fas fa-ruler-combined"></i> Hướng dẫn đo size</li>
                        </ul>
                    </div>
                </div>
                <div class="col l-3">
                    <div class="footer-content footer-content-network">
                        <p class="title-box">KẾT NỐI VỚI CHÚNG TÔI</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-license">
            <p>Powered By Clothing Store Fine Clothing Store © 2024</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
