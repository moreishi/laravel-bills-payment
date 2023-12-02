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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->string('invoice_date_at');
            $table->string('due_at');
            $table->string('discount_type');
            $table->unsignedBigInteger('discount');
            $table->unsignedInteger('biller_id');
            $table->string('paid_date_at');
            $table->unsignedInteger('subtotal');
            $table->string('balance_due');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
