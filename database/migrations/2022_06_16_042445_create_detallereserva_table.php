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
        Schema::create('detallereservas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idReserva')->unsigned();
            $table->string('metodopago');
            $table->timestamp('fechaInicial');
            $table->timestamp('fechaFinal')->nullable();
            $table->float('subtotal');
            $table->float('descuento');
            $table->integer('diasRetraso');
            $table->float('total');
            $table->timestamps();

            $table->foreign('idReserva')->references('id')->on('reservas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallereserva');
    }
};
