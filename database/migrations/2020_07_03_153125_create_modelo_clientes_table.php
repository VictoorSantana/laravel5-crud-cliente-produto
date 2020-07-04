<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeloClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_clientes', function (Blueprint $table) {
            /*$table->id();
            $table->timestamps();*/

            $table->bigIncrements('id');
            $table->string('nome', 25)->default('nda'); 
            $table->string('registro', 14)->default('00');
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
        Schema::dropIfExists('modelo_clientes');
    }
}
