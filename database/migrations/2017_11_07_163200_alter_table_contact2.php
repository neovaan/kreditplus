<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableContact2 extends Migration
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
            $table->string('lat', 255)->after('icon');
            $table->string('long', 255)->after('icon');
            $table->string('title_name', 255)->after('icon');
            $table->string('contact_name', 255)->after('icon');

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
            $table->dropColumn('lat');
            $table->dropColumn('long');
            $table->dropColumn('title_name');
            $table->dropColumn('contact_name');
        });
        
    }
}
