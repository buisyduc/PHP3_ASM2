<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Tạo 50 bản ghi
          for ($i = 1; $i <= 20; $i++) {
            DB::table('phones')->insert([
                'title' => 'Điện thoại ' . $i,
                'description' => 'Mô tả cho điện thoại ' . $i,
                'price' => rand(1000000, 20000000), // Giá ngẫu nhiên từ 1 triệu đến 20 triệu
                'stock' => rand(1, 100), // Số lượng tồn kho ngẫu nhiên từ 1 đến 100
                'sku' => 'SKU-' . str_pad($i, 4, '0', STR_PAD_LEFT), // SKU với 4 chữ số
                'category_id' => rand(1, 6), // Giả định có 6 danh mục
                'image' => 'path/to/image' . $i . '.jpg', // Đường dẫn hình ảnh
                'brand' => 'Thương hiệu ' . $i,
                'model' => 'Mẫu ' . $i,
                'operating_system' => 'OS ' . $i,
                'screen_size' => rand(5, 7) + (rand(0, 99) / 100), // Kích thước màn hình từ 5.00 đến 7.99
                'resolution' => rand(720, 2160) . 'p', // Độ phân giải ngẫu nhiên
                'battery_capacity' => rand(2000, 5000), // Dung lượng pin từ 2000 đến 5000 mAh
                'ram' => rand(2, 12), // Bộ nhớ RAM từ 2GB đến 12GB
                'storage' => rand(16, 512), // Dung lượng lưu trữ từ 16GB đến 512GB
                'camera' => 'Camera ' . $i,
                'color' => 'Màu sắc ' . $i,
                'weight' => rand(150, 250) + (rand(0, 99) / 100), // Trọng lượng từ 150g đến 250g
                'dimensions' => rand(140, 160) . 'x' . rand(70, 80) . 'x' . rand(6, 10) // Kích thước ngẫu nhiên
            ]);
        }
    }
}
