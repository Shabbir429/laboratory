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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->text('address');
            $table->date('appointment_date');
            $table->string('phone',30);
            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users'); 
            $table->enum('status', ['Pending', 'Rejected', 'Success'])->default('Pending');
            $table->string('path',30)->nullable();
            $table->softDeletes('deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
