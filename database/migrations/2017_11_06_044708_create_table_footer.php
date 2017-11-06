<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('footer', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('image', 100);
            $table->string('txt1', 100);
            $table->string('txt2', 100);
        });
        Schema::create('footer_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('footer_id');
            $table->string('txt1', 100)->nullable();
            $table->string('txt2', 100)->nullable();
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
        Schema::drop('footer');
        Schema::drop('footer_i18n');
    }
}
