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
        Schema::create('table_payment', function (Blueprint $table) {
            $table->increments('transaction_id'); // ID thanh toán, khóa chính, tự động tăng dần
            $table->string('payment_methods');
            $table->string('number_cart');
            $table->string('name_owner_cart');
            $table->string('payment_address');
            $table->string('verify_id');
            $table->text('descriptions');
            $table->decimal('transaction_fees', 10, 2); // Các chi phí liên quan như phí giao hàng
            $table->string('voucher');
            $table->dateTime('time_transaction');
            $table->enum('transaction_status', ['pending', 'completed', 'failed'])->default('pending'); // ENUM hoặc VARCHAR

            // Thêm chỉ mục duy nhất cho transaction_id
            $table->unique('transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_payment');
    }
};
