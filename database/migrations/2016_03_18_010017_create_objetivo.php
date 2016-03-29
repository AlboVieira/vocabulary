<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desc');
            $table->decimal('valor');
            $table->float('tempo');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
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
