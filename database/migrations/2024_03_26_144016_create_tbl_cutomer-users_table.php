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
        Schema::create('tbl_customer_users', function (Blueprint $table) {
            $table->id(); 
            $table->string('username')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->enum('sex', ['Nam', 'Nữ', 'Khác',""])->nullable();
            $table->date('DOB')->nullable();
            $table->string('img')->nullable()->nullable();
            $table->text('address')->nullable()->nullable();
            $table->string('bank_Account')->nullable();
            $table->text('notification')->nullable();
            $table->string('google_id', 255)->nullable()->unique();
            $table->integer('coin')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_customer_users');
    }
};
