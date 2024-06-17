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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Tên sản phẩm
            $table->text('description');      // Mô tả sản phẩm
            $table->decimal('price', 10, 2);  // Giá sản phẩm, với 2 chữ số thập phân
            $table->integer('stock');         // Số lượng sản phẩm trong kho
            $table->boolean('active')->default(true); // Trạng thái sản phẩm, mặc định là kích hoạt (active)
            $table->timestamps();             //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
