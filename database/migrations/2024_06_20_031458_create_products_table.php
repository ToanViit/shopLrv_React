<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->string('imgSrc')->nullable();
            $table->string('title');
            $table->string('name'); // Thêm cột name vào bảng
            $table->decimal('price', 10, 2);
            $table->json('sizes')->nullable();
            $table->timestamps();
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
