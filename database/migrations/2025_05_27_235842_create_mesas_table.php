<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique();
            $table->string('situacao')->default('disponível'); // exemplo: disponível, ocupada, reservada
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};

