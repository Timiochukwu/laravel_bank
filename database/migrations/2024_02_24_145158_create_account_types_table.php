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
        Schema::create('account_types', function (Blueprint $table) {
            $table->id('id');
            $table->string('hash_id');
            $table->string('account_name');
            $table->integer('minimum_opening_balance');
            $table->integer('maximum_opening_balance');
            $table->integer('expected_minimum_balance');
            $table->integer('expected_maximum_balance');
            $table->enum('visibility', ['0', '1'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_types');
    }
};
