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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->decimal('total_orders', 12, 2);
            $table->decimal('total_customers', 12, 2);
            $table->decimal('total_staff', 12, 2);
            $table->decimal('total_stock', 12, 2);
            $table->decimal('total_incomes', 12, 2);
            $table->decimal('total_expense', 12, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
