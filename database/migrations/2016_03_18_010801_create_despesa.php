<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesa', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('data');
            $table->decimal('valor');
            $table->char('fixa');
            $table->foreign('tipo_despesa')->references('id')->on('tipo_despesa');
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
        //
    }
}
