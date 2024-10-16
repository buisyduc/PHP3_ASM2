<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->text('description')->nullable(); // Mô tả sản phẩm
            $table->decimal('price', 10, 2); // Giá sản phẩm
            $table->unsignedInteger('stock')->default(0); // Số lượng tồn kho
            $table->string('sku')->unique(); // Mã sản phẩm (SKU)
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Khóa ngoại danh mục
            $table->string('image')->nullable(); // Đường dẫn đến hình ảnh sản phẩm
            // Các trường đặc trưng cho điện thoại
            $table->string('brand'); // Thương hiệu
            $table->string('model'); // Mẫu điện thoại
            $table->string('operating_system'); // Hệ điều hành
            $table->decimal('screen_size', 5, 2); // Kích thước màn hình
            $table->string('resolution')->nullable(); // Độ phân giải
            $table->unsignedInteger('battery_capacity')->nullable(); // Dung lượng pin
            $table->unsignedInteger('ram')->nullable(); // Bộ nhớ RAM
            $table->unsignedInteger('storage')->nullable(); // Dung lượng lưu trữ
            $table->string('camera')->nullable(); // Thông tin về camera
            $table->string('color')->nullable(); // Màu sắc
            $table->unsignedDecimal('weight', 5, 2)->nullable(); // Trọng lượng
            $table->string('dimensions')->nullable(); // Kích thước
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
