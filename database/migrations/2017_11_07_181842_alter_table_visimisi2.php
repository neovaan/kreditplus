<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVisimisi2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('visimisi', function(Blueprint $table)
        {
            $table->text('txt_visi');
            $table->text('img_visi');
            $table->text('txt_misi');
            $table->text('img_misi');
            $table->text('txt_nilai');
            $table->text('img_nilai');
        });

        Schema::table('visimisi_i18n', function(Blueprint $table)
        {
           $table->text('txt_visi');
            $table->text('txt_misi');
            $table->text('txt_nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('visimisi_i18n', function(Blueprint $table)
        {
            $table->dropColumn('txt_visi');
            $table->dropColumn('txt_misi');
            $table->dropColumn('txt_nilai');
        });
           Schema::table('visimisi', function(Blueprint $table)
        {
            $table->dropColumn('txt_visi');
            $table->dropColumn('img_visi');
            $table->dropColumn('txt_misi');
            $table->dropColumn('img_misi');
            $table->dropColumn('txt_nilai');
            $table->dropColumn('img_nilai');
        });
    }
}
