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
        Schema::create('transaction_type', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->integer('customer_id');
            $table->string('sender_id');
            $table->string('recipient_id');
            $table->string('transaction_type');
            $table->string('previous_balance');
            $table->string('transaction_amout');
            $table->string('final_balance');
            $table->enum('visibility', ['0', '1'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_type');
    }
};
