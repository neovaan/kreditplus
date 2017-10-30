<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kreditpluskarir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('kreditpluskarir', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id');
            $table->string('title');
            $table->string('intro');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kreditpluskarir');
    }
}
