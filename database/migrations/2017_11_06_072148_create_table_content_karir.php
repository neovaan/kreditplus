<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContentKarir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_karir', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('intro');
            $table->text('description');
            $table->string('txt1',100);
            $table->string('txt2',100);
            $table->string('email',100);
        });
        Schema::create('content_karir_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('content_karir_id');
            $table->string('txt1', 100)->nullable();
            $table->string('txt2', 100)->nullable();
            $table->string('title', 100)->nullable();
            $table->text('intro')->nullable();
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
        Schema::drop('content_karir');
        Schema::drop('content_karir_i18n');
    }
}
