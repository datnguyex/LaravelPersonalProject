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
        Schema::create('tbl_feedback', function (Blueprint $table) {
            $table->integer("feedbackID"); // Tạo cột id với kiểu dữ liệu bigint auto-increment và làm khóa chính
            $table->integer("userID");
            $table->integer("ProductID");
            $table->text("content");
            $table->dateTime("date");
            $table->enum('type', ['Complaint', 'review']);
            $table->enum('status', ['Seen', 'not seen']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_feadback');
    }
};
