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
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id'); 
            $table->unsignedBigInteger('tailor_id'); 
            $table->unsignedBigInteger('stock_id');

            // Cloth
            $table->string('length')->nullable();
            $table->string('chest')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('sleeve_type')->nullable();
            $table->string('collar_type')->nullable();
            $table->string('tonban_length')->nullable();
            $table->string('tonban_type')->nullable();
            $table->string('cuff_type')->nullable();
            $table->string('cuff_size')->nullable();
            $table->string('yakhan')->nullable();
            $table->string('yakhan_type')->nullable();
            $table->string('skirt_type')->nullable();
            $table->string('front_pocket')->nullable();
            $table->string('front_double_pockets')->nullable();
            $table->string('side_pocket')->nullable();
            $table->string('side_double_pockets')->nullable();
            $table->string('buttons_type')->nullable();

            // Shirt
            $table->string('shirt_length')->nullable();
            $table->string('shirt_chest')->nullable();
            $table->string('shirt_shoulder')->nullable();
            $table->string('shirt_sleeve')->nullable();
            $table->string('shirt_collar')->nullable();
            $table->string('shirt_front_pock')->nullable();
            $table->string('shirt_front_double_pockets')->nullable();
            $table->string('shirt_type')->nullable();
            $table->string('shirt_buttons_type')->nullable();

            // Pant 
            $table->string('pant_length')->nullable();
            $table->string('pant_waist')->nullable();
            $table->string('pant_thigh')->nullable();
            $table->string('pant_type')->nullable();
            $table->string('pant_buttons')->nullable();


            // Coat 
            $table->string('coat_length')->nullable();
            $table->string('coat_chest')->nullable();
            $table->string('coat_waist')->nullable();
            $table->string('coat_shoulder')->nullable();
            $table->string('coat_sleeve')->nullable();
            $table->string('shirt_collar_type')->nullable();
            $table->string('coat_sleeve_type')->nullable();
            $table->string('coat_type')->nullable();
            $table->string('coat_pockets')->nullable();
            $table->string('coat_inside_pockets')->nullable();
            $table->string('coat_buttons')->nullable();

            // Waistcoat
            $table->string('waistcoat_length')->nullable();
            $table->string('waistcoat_chest')->nullable();
            $table->string('waistcoat_waist')->nullable();
            $table->string('waistcoat_shoulder')->nullable();
            $table->string('waistcoat_type')->nullable();
            $table->string('waistcoat_pockets')->nullable();
            $table->string('waistcoat_inside_pockets')->nullable();
            $table->string('waistcoat_buttons')->nullable();
            
            $table->unsignedBigInteger('added_by');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('tailor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurements');
    }
};
