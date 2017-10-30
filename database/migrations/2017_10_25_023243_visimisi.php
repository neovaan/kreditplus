<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Visimisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('visimisi', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id');
            $table->string('visi', 225);
            $table->text('misi');
            $table->text('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('visimisi');
    }
}
