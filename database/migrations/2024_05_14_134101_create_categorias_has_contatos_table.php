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
        Schema::create('categorias_has_contatos', function (Blueprint $table) {
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('contato_id')->constrained('contatos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_has_contatos');
    }
};
