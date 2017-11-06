<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInformasiTableAddColumnPermalink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informasi', function(Blueprint $table)
        {
            $table->string('permalink', 255)->unique()->after('title');

        });
         Schema::table('informasi_i18n', function(Blueprint $table)
        {
            $table->string('permalink', 255)->unique()->after('title');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informasi', function(Blueprint $table)
        {
            $table->dropColumn('permalink');
        });
         Schema::table('informasi_i18n', function(Blueprint $table)
        {
            $table->dropColumn('permalink');
        });
    }
}
