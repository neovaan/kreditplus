<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMapCabang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('map_cabang', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('lat', 100);
            $table->string('long', 100);
            $table->string('title_name', 100);
            $table->string('contact_name', 100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('map_cabang');
    }
}
