<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePengajuanUserClass extends Migration {
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
            $table->string('nama', 100);
            $table->string('alamat', 100)->nullable();
            $table->string('ktp', 100)->nullable();
            $table->string('telp', 100);
            $table->string('email', 100);
            $table->string('rya', 100);
            $table->string('brand', 100);
            $table->string('area', 100);
            $table->string('pesan', 2000);
        });

        Schema::create('pengajuan_user_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('pengajuan_user_id');
            $table->string('pesan', 2000)->nullable();
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
        Schema::drop('pengajuan_user');

        Schema::drop('pengajuan_user_i18n');
    }
}