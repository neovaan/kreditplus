<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('content', function(Blueprint $table)
        {
            $table->string('flag', 255)->after('description');

        });
          Schema::table('content_i18n', function(Blueprint $table)
        {
            $table->string('flag', 255)->after('description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('content', function(Blueprint $table)
        {
            $table->dropColumn('flag');
        });

          Schema::table('content_i18n', function(Blueprint $table)
        {
            $table->dropColumn('flag');
        });
    }
}
