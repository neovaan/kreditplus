<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('layanan', function(Blueprint $table)
        {
            $table->string('txt1', 255);
            $table->string('txt2', 255);
            $table->string('txt3', 255);
            $table->string('txt4', 255);
            $table->string('txt5', 255);
            $table->string('image3', 255);
            $table->string('image4', 255);
            $table->string('image5', 255);

        });
          Schema::table('layanan_i18n', function(Blueprint $table)
        {
            $table->string('txt1', 255);
            $table->string('txt2', 255);
            $table->string('txt3', 255);
            $table->string('txt4', 255);
            $table->string('txt5', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('layanan', function(Blueprint $table)
        {
            $table->dropColumn('txt1');
            $table->dropColumn('txt2');
            $table->dropColumn('txt3');
            $table->dropColumn('txt4');
            $table->dropColumn('txt5');
            $table->dropColumn('image1');
            $table->dropColumn('image2');
            $table->dropColumn('image3');
        });

          Schema::table('layanan_i18n', function(Blueprint $table)
        {
            $table->dropColumn('txt1');
            $table->dropColumn('txt2');
            $table->dropColumn('txt3');
            $table->dropColumn('txt4');
            $table->dropColumn('txt5');
        });
    }
}
