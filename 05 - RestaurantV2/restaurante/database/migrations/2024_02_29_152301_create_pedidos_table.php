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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->enum('tipo_pedido',['DOMICILIO','LOCAL']);
            $table->float('precio',10,2);
            $table->time('hora');
            $table->unsignedBigInteger('platos_id');
            $table->unsignedBigInteger('cupon_id');
            $table->tinyInteger('status_pedido')->default(1);
            $table->foreign('platos_id')->references('id')->on('platos')->onDelete('cascade');
            $table->foreign('cupon_id')->references('id')->on('cupons')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_domicios');
    }
};
