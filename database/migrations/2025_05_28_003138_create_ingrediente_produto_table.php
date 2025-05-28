<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ingrediente_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ingrediente_id')->constrained()->onDelete('cascade');
            $table->foreignId('produto_id')->constrained()->onDelete('cascade');
            $table->integer('quantidade')->default(1);
            $table->decimal('gramatura', 8, 2); // em gramas (ex: 15.5g)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ingrediente_produto');
    }
};
