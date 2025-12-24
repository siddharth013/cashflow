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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->foreignId('payment_instrument_id')->constrained()->cascadeOnDelete();
            $table->foreignId('expense_category_id')->nullable()->constrained()->nullOnDelete();

            $table->date('transaction_date');
            $table->string('description');

            $table->decimal('amount', 12, 2);
            $table->enum('direction', ['debit', 'credit']);

            // EMI support
            $table->boolean('is_emi')->default(false);
            $table->integer('emi_month')->nullable();
            $table->integer('emi_total_months')->nullable();
            $table->decimal('emi_principal', 12, 2)->nullable();
            $table->decimal('emi_interest', 12, 2)->nullable();

            // Import tracking
            $table->string('source')->nullable(); // ICICI CSV, SBI PDF
            $table->string('external_reference')->nullable();

            $table->timestamps();

            $table->index(['transaction_date', 'amount']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
