<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVisimisi extends Migration
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
            $table->text('title', 255)->after('nilai');

        });
          Schema::table('visimisi_i18n', function(Blueprint $table)
        {
            $table->text('title', 255)->after('nilai');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('visimisi', function(Blueprint $table)
        {
            $table->dropColumn('title');
        });

          Schema::table('visimisi_i18n', function(Blueprint $table)
        {
            $table->dropColumn('title');
        });
    }
}
