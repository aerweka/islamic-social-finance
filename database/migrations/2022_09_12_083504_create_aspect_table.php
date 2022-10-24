<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspect', function (Blueprint $table) {
            $table->increments('id_aspek');
            $table->integer('kode');
            $table->string('aspek');
            $table->longText('definisi');
            $table->double('bobot_aspek');
            $table->integer('id_dimensi')->unsigned();

            $table->foreign('id_dimensi', 'fk_dimensi')->references('id_dimensi')->on('dimention');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_aspect');
    }
}
