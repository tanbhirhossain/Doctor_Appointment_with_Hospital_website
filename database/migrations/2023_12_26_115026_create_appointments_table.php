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
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->unsignedBigInteger('doctor_id');
            $table->datetime('start_time');
            $table->datetime('end_time');

            $table->string('patient_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('chamber_location')->nullable();
            $table->string('visit_fee')->nullable();
            $table->string('doctor_name')->nullable();

            $table->string('serial_no')->nullable();
            $table->text('remarks')->nullable();

            $table->string('ip_address')->nullable();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('doctor_id')->references('id')->on('doctors');
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
