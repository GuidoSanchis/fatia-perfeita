<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->dateTime('data');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('taxa_servico', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            $table->string('situacao')->default('aberto'); // Ex: aberto, fechado, cancelado
            $table->foreignId('mesa_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
