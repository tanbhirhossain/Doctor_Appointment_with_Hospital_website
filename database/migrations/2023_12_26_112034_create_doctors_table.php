<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->unsignedBigInteger('department_id');
            $table->string('qualification');
            $table->string('designation');
            $table->string('institute')->nullable();

            $table->string('speciality')->nullable();

            $table->text('biography')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->default(Hash::make('dr123456'));

            $table->string('image')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('chamber_location');
            
            $table->text('meta_description')->nullable();
            $table->float('visit_fee')->nullable();

            $table->text('slug')->unique();
            
            $table->unsignedBigInteger('created_by');
            $table->string('created_by_name');
            
            $table->boolean('isHomePage')->default(0);

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('department_id')->references('id')->on('departments');

        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
