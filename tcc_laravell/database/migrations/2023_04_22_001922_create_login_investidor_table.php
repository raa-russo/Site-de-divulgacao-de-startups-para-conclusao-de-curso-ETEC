<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginInvestidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_investidor', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('senha');
            $table->string('telefone');
            $table->string('cpf');
            $table->string('rg');
            $table->string('ocupacao');
            $table->string('endereco');
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
        Schema::dropIfExists('login_investidor');
    }
}
