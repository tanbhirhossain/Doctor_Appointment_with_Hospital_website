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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            //logo
            $table->string('logo_header')->nullable();
            $table->string('logo_bottom')->nullable();
            $table->string('logo_navbar')->nullable();

            //contacts
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('time_schedule')->nullable();
 

            //Social
            $table->text('fb_id')->nullable();
            $table->text('twitter_id')->nullable();
            $table->text('linkedin_id')->nullable();
            $table->text('instagram_id')->nullable();
            $table->text('youtube_id')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
