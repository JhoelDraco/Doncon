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
        Schema::create('monedacaja', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('id_moneda');
            $table->foreign('id_moneda')->references('id')->on('moneda');
            $table->unsignedBigInteger('id_cajadia');
            $table->foreign('id_cajadia')->references('id')->on('cajadia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monedacaja');
    }
};
