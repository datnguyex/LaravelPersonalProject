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
        Schema::create('tbl_invoices-detail', function (Blueprint $table) {
            $table->integer("InvoiceDetailID"); // Tạo cột id với kiểu dữ liệu bigint auto-increment và làm khóa chính
            $table->integer("InvoiceID");
            $table->integer("ProductID");
            $table->integer("InvoiceDate");
            $table->decimal("Price");
            $table->decimal("Total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_invoices-detail');
    }
};
