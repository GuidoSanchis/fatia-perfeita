<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('imagem')->nullable();
            $table->text('descricao')->nullable();
            $table->string('tipo')->nullable(); // ex: bebida, comida, etc.
            $table->decimal('preco_base', 10, 2);
            $table->string('situacao')->default('ativo'); // ativo, inativo
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

