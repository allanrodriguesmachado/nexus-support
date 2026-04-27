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
        Schema::create('callings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreignId('technical_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title', 50)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('category', 50)->nullable();
            $table->string('status', 20)->default('pending')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('callings');
    }
};
