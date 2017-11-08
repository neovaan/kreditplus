<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact', function(Blueprint $table)
        {
            $table->string('icon', 255)->after('field4');
            $table->string('nm_persh', 255)->after('field4');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact', function(Blueprint $table)
        {
            $table->dropColumn('icon');
            $table->dropColumn('nm_persh');
        });
        
    }
}
