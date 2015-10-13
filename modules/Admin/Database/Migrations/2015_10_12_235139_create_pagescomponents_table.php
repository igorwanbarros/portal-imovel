<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagescomponentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagescomponents', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages');
            $table->integer('component_id')->unsigned();
            $table->foreign('component_id')->references('id')->on('components');
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
        Schema::drop('pagescomponents');
    }

}
