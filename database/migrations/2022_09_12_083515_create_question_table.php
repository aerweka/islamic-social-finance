<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id_pertanyaan');
            $table->integer('id_aspek')->unsigned();
            $table->integer('kode_indikator');
            $table->longText('soal');
            $table->longText('pilihan_1');
            $table->longText('pilihan_2')->nullable();
            $table->longText('pilihan_3');
            $table->longText('pilihan_4')->nullable();
            $table->longText('pilihan_5');
            $table->Double('bobot_pertanyaan');

            $table->foreign('id_aspek', 'fk_aspek')->references('id_aspek')->on('aspect');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
    }
}
