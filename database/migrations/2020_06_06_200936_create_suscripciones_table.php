<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->date('fecha_insc')->nullable()->default(null);
            $table->unsignedBigInteger('servicio_id')->unsigned()->nullable()->default(null);
            $table->unsignedBigInteger('suscriptor_id')->unsigned()->nullable()->default(null);
            $table->index(['suscriptor_id'], 'fk_suscripciones_users1_idx');
            $table->foreign('suscriptor_id', 'fk_suscripciones_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->index(['servicio_id'], 'fk_suscripciones_servicios1_idx');
            $table->foreign('servicio_id', 'fk_suscripciones_servicios1_idx')
                ->references('id')->on('servicios')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suscripciones');
    }
}
