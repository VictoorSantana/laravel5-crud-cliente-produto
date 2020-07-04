<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeloProdutosTable extends Migration
{
    //  PARA CRIAR: php artisan make:model Models/ModeloProduto -m

    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao', 25)->default('nda'); 
            $table->decimal('preco', 5,2)->default(1); 
            $table->integer('quantidade')->default(1);
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
        Schema::dropIfExists('modelo_produtos');
    }
}
