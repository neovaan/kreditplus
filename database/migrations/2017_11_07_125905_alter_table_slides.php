<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableSlides extends Migration
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
            $table->string('image_phone', 255)->after('txtbtn');
            $table->string('image_desktop', 255)->after('txtbtn');

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
            $table->dropColumn('image_phone');
            $table->dropColumn('image_desktop');
        });
         
    }
}
