<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('banner', function(Blueprint $table)
        {
            $table->string('image_medium', 255)->after('path');
            $table->string('image_small', 255)->after('path');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner', function(Blueprint $table)
        {
            $table->dropColumn('image_medium');
            $table->dropColumn('image_small');
        });
        
    }
}
