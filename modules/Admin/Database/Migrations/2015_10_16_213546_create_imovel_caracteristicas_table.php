<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelCaracteristicasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_caracteristica', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('imovel_id')->unsigned();
			$table->index('imovel_id');
            $table->foreign('imovel_id')
                  ->references('id')
                  ->on('imovel');
            $table->integer('caracteristica_id')->unsigned();
			$table->index('caracteristica_id');
            $table->foreign('caracteristica_id')
                  ->references('id')
                  ->on('caracteristica');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imovel_caracteristica');
    }

}
