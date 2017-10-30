<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tabel_pengajuan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id');
            $table->string('persyaratan', 225);
            $table->string('wiraswasta', 225);
            $table->string('karyawan', 225);
            $table->string('profesional', 225);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tabel_pengajuan');
    }
}
