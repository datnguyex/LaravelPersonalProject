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
        Schema::create('table_report', function (Blueprint $table) {
            $table->increments('report_id'); // ID report, khóa chính, tự động tăng dần
            $table->integer('user_id')->nullable(); // or seller_id
            $table->string('report_type'); // VARCHAR or ENUM
            $table->enum('report_status', ['pending', 'resolved'])->default('pending'); // VARCHAR or ENUM

            // Thêm chỉ mục duy nhất cho report_id
            $table->unique('report_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_report');
    }
};
