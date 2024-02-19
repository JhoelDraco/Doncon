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
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->id();

            $table->longText('descripcion')->nullable();

            $table->unsignedBigInteger('id_clientes');
            $table->unsignedBigInteger('id_ventas');

            $table->foreign('id_clientes')->references('id')->on('clientes');
            $table->foreign('id_ventas')->references('id')->on('ventas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleventa');
    }
};
