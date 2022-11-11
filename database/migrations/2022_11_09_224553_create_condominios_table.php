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
        Schema::create('condominios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('Bairro_id')->constrained();
            $table->string('endereco');
            $table->string('CEP');
            $table->float('valor_condominio');
            $table->string('caract_cond');
            $table->string('zelador');
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
        Schema::dropIfExists('condominios');
    }
};
