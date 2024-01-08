<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('niapp_bimeh', function (Blueprint $table) {
            $table->id();
            $table->string('serial')->nullable();
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('postsalcode')->nullable();
            $table->string('irancode')->nullable();
            $table->string('bimehcode')->nullable();
            $table->string('imei')->nullable();
            $table->string('price')->nullable();
            $table->string('model')->nullable();
            $table->string('startday')->nullable();
            $table->string('endday')->nullable();
            $table->string('bimehmode')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('niapp_bimeh');
    }
};
