<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PengajuanUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pengajuan_user', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('ktp');
            $table->string('telp');
            $table->string('email');
            $table->string('rya');
            $table->text('pesan');
            $table->integer('brand');
            $table->integer('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengajuan_user');
    }
}
