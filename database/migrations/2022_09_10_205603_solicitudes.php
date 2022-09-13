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
        //
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('datepicker');
            $table->string('message');

            $table->bigInteger('cliente_id')->unsigned();
            $table->bigInteger('servicio_id')->unsigned();
            $table->bigInteger('ejecutivo_id')->unsigned();
            $table->bigInteger('estadosolicitud_id')->unsigned();
            
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete("cascade");
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete("cascade");
            $table->foreign('ejecutivo_id')->references('id')->on('empleados')->onDelete("cascade");
            $table->foreign('estadosolicitud_id')->references('id')->on('estadosolicituds')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
