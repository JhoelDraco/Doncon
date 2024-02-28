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
        Schema::create('moneda', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_moneda',20);
            $table->float('tipo_cambio');
            $table->timestamps();

            $table->unsignedBigInteger('id_cajadia');
            $table->foreign('id_cajadia')->references('id')->on('cajadia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moneda');
    }
};
