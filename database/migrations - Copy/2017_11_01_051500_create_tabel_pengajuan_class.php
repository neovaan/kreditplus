<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTabelPengajuanClass extends Migration {
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
            $table->string('section_id', 100);
            $table->string('persyaratan', 100);
            $table->string('wiraswasta', 100);
            $table->string('karyawan', 100);
            $table->string('profesional', 100);
        });

        Schema::create('tabel_pengajuan_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('tabel_pengajuan_id');
            $table->string('persyaratan', 100)->nullable();
            $table->datetime('create_on');
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

        Schema::drop('tabel_pengajuan_i18n');
    }
}