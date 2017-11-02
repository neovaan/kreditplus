<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateKarirClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karir', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('title_job', 100);
            $table->string('penempatan', 100);
            $table->text('description')->nullable();
        });

        Schema::create('karir_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('karir_id');
            $table->text('description')->nullable();
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
        Schema::drop('karir');

        Schema::drop('karir_i18n');
    }
}