<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelMiniBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mini_banner', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('txt', 100);
            $table->string('txtbtn', 100);
            $table->string('background', 100);
            $table->string('link', 100);

        });

        Schema::create('mini_banner_i18n', function(Blueprint $table)
        {
            $table->increments('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('mini_banner_id');
            $table->string('txt', 100);
            $table->string('txtbtn', 100);
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
        Schema::drop('mini_banner');
        Schema::drop('mini_banner_i18n');
    }
}
