<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePageConfigurationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_configuration', function(Blueprint $table)
        {
            $table->string('group_menu');
            $table->boolean('ativo')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_configuration', function(Blueprint $table)
        {
            $table->dropColumn('group_menu');
            $table->dropColumn('ativo');
        });
    }

}
