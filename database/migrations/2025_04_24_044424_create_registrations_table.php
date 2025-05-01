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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->date('dob');
            $table->string('skills');
            $table->decimal('salary', 5,3);
            $table->string('salary_type');
            $table->string('mobile');
            $table->string('agreement');
            $table->string('agreement_file');
            $table->string('photo');
            $table->unsignedBigInteger('added_by');
            $table->timestamps();
            $table->softDeletes(); 

            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
