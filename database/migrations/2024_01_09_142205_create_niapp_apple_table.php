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
        Schema::create('niapp_apple', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('appleid')->nullable();
            $table->string('password')->nullable();
            $table->string('tell')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niapp_apple');
    }
};
