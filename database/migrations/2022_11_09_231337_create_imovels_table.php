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
        Schema::create('imovels', function (Blueprint $table) {
            $table->id();
            $table->string('referencia');
            $table->integer('status');
            $table->string('title');
            $table->text('description');
            $table->foreignId('Tipo_id')->constrained();
            $table->string('destination');
            $table->float('valor_venda');
            $table->float('valor_anual');
            $table->float('valor_temporada');
            $table->float('area_util');
            $table->float('area_total');
            $table->integer('quartos');
            $table->integer('suites');
            $table->integer('banheiros');
            $table->integer('vagas_garagem');
            $table->string('caract_imovel');
            $table->foreignId('Condominio_id')->constrained();
            $table->float('iptu');
            $table->float('condominio');
            $table->string('zelador_caseiro');
            $table->foreignId('Bairro_id')->constrained();
            $table->string('endereco');
            $table->string('CEP');
            $table->foreignId('Proprietario_id')->constrained();
            $table->text('notas_privadas');
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
        Schema::dropIfExists('imovels');
    }
};
