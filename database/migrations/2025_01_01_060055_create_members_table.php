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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('member_type')->nullable();
            $table->string('phone')->nullable();
            $table->string('em_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fbLink')->nullable();
            $table->string('nid')->nullable();
            $table->string('education')->nullable();
            $table->string('occupation')->nullable();
            $table->string('voluntary')->nullable();
            $table->string('skill')->nullable();
            $table->string('address')->nullable();
            $table->string('pAddress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
