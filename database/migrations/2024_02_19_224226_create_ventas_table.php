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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->float('subtotal');
            $table->longText('descripcion')->nullable();

            $table->unsignedBigInteger('id_clientes')->nullable();
            $table->unsignedBigInteger('id_usuarios')->nullable();
            $table->foreign('id_usuarios')->references('id')->on('users')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign('id_clientes')->references('id')->on('clientes')
            ->onDelete('set null')
            ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
