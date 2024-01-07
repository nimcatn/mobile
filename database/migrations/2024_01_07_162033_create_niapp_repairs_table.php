<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('niapp_repairs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tell');
            $table->string('model')->nullable();
            $table->string('imei')->nullable();
            $table->string('price')->nullable();
            $table->string('facestatus')->nullable();
            $table->string('card')->nullable();
            $table->string('lock')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('niapp_repairs');
    }
};
