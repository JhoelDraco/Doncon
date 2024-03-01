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

            $table->integer('cantidad');
            $table->float('subtotal');

            $table->unsignedBigInteger('id_productos')->nullable();
            $table->unsignedBigInteger('id_ventas')->nullable();

            $table->foreign('id_productos')->references('id')->on('productos');
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
