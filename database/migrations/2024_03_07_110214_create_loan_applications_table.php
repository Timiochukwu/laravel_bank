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
        Schema::create('loan_applications', function (Blueprint $table) {
                $table->id();
                $table->string('hash_id');
                $table->string('customer_hash_id');
                $table->string('amount');
                $table->string('bank');
                $table->string('account_number');
                $table->string('loan_type_id');
                $table->string('installment_count');
                $table->string('installment_amount');
                $table->string('amount_payable');
                $table->string('date_applied');
                $table->enum('status',['approved', 'unapproved'])->default('unapproved');
                $table->enum('visibilty', ['0', '1'])->default('1');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
