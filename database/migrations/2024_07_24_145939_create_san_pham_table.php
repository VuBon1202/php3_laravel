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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ma_san_pham', length: 10)->unique(); //unique quy định dữ liệu không được trùng nhau
            $table->string('ten_san_pham', length: 100);
            $table->double('gia', 8, 2);
            $table->integer('so_luong')->nullable(); // nullable cho phép giá trị là null
            $table->date('ngay_nhap'); //Kiểu ngày tháng năm
            $table->boolean('trang_thai')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
