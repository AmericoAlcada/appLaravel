<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up(): void
    {
        Schema::create('futebolistas', function (Blueprint $tabela){
            $tabela->id();
            $tabela->string('nome', 512);
            $tabela->string('idade', 512);
            $tabela->string('clube', 512);
            $tabela->string('posicao', 512);
            $tabela->string('pais', 512);
            $tabela->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('utilizadores');
    }
};
