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
        Schema::create('table_comment', function (Blueprint $table) {
            $table->increments('comment_id')->unique(); // ID category, khóa chính, tự động tăng dần
            $table->string('description');
            $table->string('img')->nullable();
            $table->integer('customerUserId');
            $table->integer('productId');
            $table->integer('star');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_comment');
    }
};
