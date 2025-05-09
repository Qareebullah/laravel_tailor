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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->text('purpose');
            $table->decimal('amount', 10, 3);
            $table->foreignId('expense_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('inserted_by')->constrained('users')->onDelete('cascade');
            $table->string('payment_method');
            $table->string('reference');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
