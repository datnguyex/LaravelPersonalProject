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
        Schema::create('tbl_sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('password')->hash();
            $table->string('phone')->unique()->nullable();
            $table->string('img')->nullable()->nullable();
            $table->enum('sex', ['Nam', 'Nữ', 'Khác',""])->nullable();
            $table->date('DOB')->nullable();
            $table->text('address')->nullable();
            $table->text('feedback')->nullable();
            $table->text('history_transaction')->nullable();
            $table->string('name_company')->nullable();
            $table->enum('type_business', ['individual', 'enterprise'])->nullable();
             $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_sellers');
    }
};
