<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableSlide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slides', function(Blueprint $table)
        {
            $table->string('txtbtn', 255);

        });
          Schema::table('slides_i18n', function(Blueprint $table)
        {
            $table->string('txtbtn', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('slides', function(Blueprint $table)
        {
            $table->dropColumn('txtbtn');
        });

          Schema::table('slides_i18n', function(Blueprint $table)
        {
            $table->dropColumn('txtbtn');
        });
    }
}
