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
       Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('bank_name');          // SBI, HDFC, CSB
            $table->string('card_name');          // Octane, Tata Neu
            $table->string('network')->nullable(); // Visa, RuPay, Mastercard

            $table->decimal('credit_limit', 12, 2)->nullable();
            $table->date('billing_cycle_start')->nullable();
            $table->date('billing_cycle_end')->nullable();

            $table->decimal('annual_fee', 10, 2)->nullable();
            $table->decimal('fee_waiver_threshold', 12, 2)->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_cards');
    }
};
