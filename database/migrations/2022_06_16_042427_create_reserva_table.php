<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idHabitacion')->unsigned();
            $table->bigInteger('idCliente')->unsigned();
            $table->bigInteger('idRecepcionista')->unsigned();
            $table->date('fechaEntrada');
            $table->date('fechaSalida');
            $table->date('fechaSalidaConfirmacion')->null();
            $table->float('precioInicial');
            $table->float('descuento')->null();
            $table->float('costoPenalidad')->null();;
            $table->float('total');
            
            $table->timestamps();

            $table->foreign('idHabitacion')->references('id')->on('habitaciones')->onDelete('cascade');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('idRecepcionista')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
