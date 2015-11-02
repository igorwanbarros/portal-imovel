<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('data_cadastro');
            $table->string('uf');
            $table->decimal('valor',15,2);
            $table->integer('quartos');
            $table->integer('vagas');
            $table->enum('negociacao',['venda','locacao','ambos']);
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->integer('cep');
            $table->integer('numero');
            $table->string('responsavel');
            $table->string('observacao');
            $table->string('publicado');
            $table->integer('webservice_id')->default(NULL);
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
        Schema::drop('imovel');
    }
}
