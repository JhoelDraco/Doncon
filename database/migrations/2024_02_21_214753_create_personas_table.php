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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre1', 20);
            $table->string('nombre2', 20)->nullable();
            $table->string('apellido1', 20);
            $table->string('apellido2', 20)->nullable();

            $table->unsignedBigInteger('id_clientes');

            $table->foreign('id_clientes')->references('id')->on('clientes')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
