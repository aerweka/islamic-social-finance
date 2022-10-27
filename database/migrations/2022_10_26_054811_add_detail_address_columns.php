<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailAddressColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('alamat_laznas');
            $table->string('alamat_jalan');
            $table->string('alamat_desa');
            $table->string('alamat_kec');
            $table->string('alamat_kabkot');
            $table->string('alamat_prov');
            $table->string('no_rekomendasi_pembuatan')->nullable();
            $table->string('tgl_rekomendasi_pembuatan')->nullable();
            $table->string('no_rekomendasi_perpanjangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
