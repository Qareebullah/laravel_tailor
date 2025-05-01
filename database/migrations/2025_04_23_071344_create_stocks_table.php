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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->string('product_type');
            $table->decimal('amount', 10, 2);
            $table->string('color');
            $table->decimal('purchase_price', 10, 2);
            $table->decimal('expense', 10, 2);
            $table->decimal('sell_price', 10, 2);
            $table->string('medan_country');
            $table->unsignedBigInteger('purchase_by');
            $table->unsignedBigInteger('added_by');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
