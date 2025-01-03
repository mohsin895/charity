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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('logo')->nullable();
            $table->string('favIcon')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('tLink')->nullable();
            $table->string('fLink')->nullable();
            $table->string('yLink')->nullable();
            $table->string('iLink')->nullable();
            $table->text('address')->nullable();
            $table->string('url')->nullable();
            $table->longText('blood_hsitory')->nullable();
            $table->text('footer_content')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
