<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtigoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modulo_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('usuario_id');
            $table->tinyInteger('scope')->default(1);
            $table->tinyInteger('tipo')->default(1);
            $table->string('titulo', 100);
            $table->text('artigo');
            $table->timestamp('data_artigo')->nullable();
            $table->timestamp('data_inicial')->nullable();
            $table->timestamp('data_final')->nullable();
            $table->string('fonte')->nullable();
            $table->string('chapeu')->nullable();
            $table->string('linha_fina')->nullable();
            $table->tinyInteger('visivel_periodo_eleitoral')->default(1);
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
        Schema::dropIfExists('task');
    }
}
