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
        Schema::create('captacaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('phone');
            $table->string('tipo_imovel');
            $table->string('destinatio');
            $table->float('valor');
            $table->string('endereco');
            $table->integer('n_quartos');
            $table->integer('n_banheiros');
            $table->integer('n_suites');
            $table->integer('vagas_garagem');
            $table->float('area_util');
            $table->text('mais_detalhes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('captacaos');
    }
};
