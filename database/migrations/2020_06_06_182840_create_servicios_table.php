<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('nombre', 50)->nullable();
            $table->string('desc', 100)->nullable();
            $table->decimal('precio', 8, 2)->nullable();
            $table->decimal('recargo', 8, 2)->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->softDeletes();
            /*$table->unsignedBigInteger('cobrador_id')->unsigned()->nullable()->default(null);
            $table->index(["cobrador_id"], 'fk_servicios_users1_idx');
            $table->foreign('cobrador_id', 'fk_servicios_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
