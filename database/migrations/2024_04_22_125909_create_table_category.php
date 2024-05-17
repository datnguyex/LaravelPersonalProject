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
        Schema::create('table_category', function (Blueprint $table) {
            $table->increments('category_id')->unique()->nullable(); // ID category, khóa chính, tự động tăng dần
            $table->string('category_name');
            $table->text('category_description')->nullable();

            // Thêm chỉ mục duy nhất cho category_id
            // $table->unique('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_category');
    }
};