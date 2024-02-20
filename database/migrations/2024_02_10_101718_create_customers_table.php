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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('account_type_name')->nullable();
            $table->string('account_number')->unique();
            $table->string('account_balance')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('visibility', ['1', '0'])->default('1');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
