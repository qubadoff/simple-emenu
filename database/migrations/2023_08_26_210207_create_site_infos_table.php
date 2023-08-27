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
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description')->nullable();
            $table->longText('logo')->nullable();
            $table->longText('cover_photo')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('location')->nullable();
            $table->text('facebook_page')->nullable();
            $table->text('instagram_page')->nullable();
            $table->text('tiktok_page')->nullable();
            $table->text('linkedin_page')->nullable();
            $table->text('twitter_page')->nullable();
            $table->text('working_hours')->nullable();
            $table->text('wifi_password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
