<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->increments('id_jawaban');
            $table->integer('id')->unsigned();
            $table->longText('jawaban_terpilih');
            $table->timestamp('filled_at');
            $table->float('total_env');
            $table->float('total_gov');
            $table->float('total_soc');
            $table->float('total_all');

            $table->foreign('id', 'fk_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');
    }
}
