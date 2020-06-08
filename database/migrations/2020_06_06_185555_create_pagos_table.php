<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('concepto', 50)->nullable();
            $table->string('desc', 100)->nullable();
            $table->decimal('monto', 5, 2)->nullable();
            $table->date('fecha_pago')->nullable()->default(null);
            $table->unsignedBigInteger('suscriptor_id')->unsigned()->nullable()->default(null);
            $table->index(['suscriptor_id'], 'fk_pagos_users1_idx');
            $table->foreign('suscriptor_id', 'fk_pagos_users1_idx')
                ->references('id')->on('users')
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
        Schema::dropIfExists('pagos');
    }
}
