<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReklamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reklames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('dasar1');
            $table->integer('dasar2');
            $table->integer('dasar3');
            $table->integer('ket');
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
        Schema::dropIfExists('reklames');
    }
}
