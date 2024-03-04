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
        Schema::create('detalletipoproducto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_tipoproducto');

            // Definir restricciones de clave externa con borrado y actualización en cascada
            $table->foreign('id_producto')
                ->references('id')->on('productos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_tipoproducto')
                ->references('id')->on('tiposproducto')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalletipoproducto');
    }
};
