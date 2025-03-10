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
        Schema::create('tb_pets', function (Blueprint $table) {
            $table->id('idPet');
            $table->string('nomePet');
            $table->integer('idadePet');
            $table->string('especie');
            $table->string('raca');
            $table->string('nomeDono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pets');
    }
};
