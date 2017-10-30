<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Layanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id');
            $table->string('title', 225);
            $table->string('image1', 225);
            $table->string('image2', 225);
            $table->text('intro');
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
        Schema::drop('layanan');
    }
}
