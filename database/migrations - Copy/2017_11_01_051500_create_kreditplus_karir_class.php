<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateKreditplusKarirClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kreditplus_karir', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('title', 100);
            $table->string('intro', 2000);
            $table->text('description');
        });

        Schema::create('kreditplus_karir_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('kreditplus_karir_id');
            $table->string('title', 100)->nullable();
            $table->string('intro', 2000)->nullable();
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
        Schema::drop('kreditplus_karir');

        Schema::drop('kreditplus_karir_i18n');
    }
}