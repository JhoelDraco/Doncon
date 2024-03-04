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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad');
            $table->longText('detalle');
            $table->dateTime('fecha_hora');
            $table->decimal('subtotal', 8, 2);

            $table->unsignedBigInteger('id_proveedores');
            $table->unsignedBigInteger('id_productos');

            $table->foreign('id_proveedores')->references('id')->on('proveedores');
            $table->foreign('id_productos')->references('id')->on('productos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
