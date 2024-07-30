<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdDanhmucToSanphamTable extends Migration
{
    public function up()
    {
        Schema::table('san_pham', function (Blueprint $table) {
            // Thêm trường id_danhmuc
            $table->unsignedBigInteger('id_danhmuc')->nullable();

            // Thêm khóa ngoại liên kết với bảng danh_mucs
            $table->foreign('id_danhmuc')->references('id')->on('danh_mucs')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('san_pham', function (Blueprint $table) {
            // Xóa khóa ngoại và trường id_danhmuc
            $table->dropForeign(['id_danhmuc']);
            $table->dropColumn('id_danhmuc');
        });
    }
}
