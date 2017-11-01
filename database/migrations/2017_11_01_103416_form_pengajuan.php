<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormPengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('form_pengajuan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('field1', 2000);
            $table->string('field2', 2000);
            $table->string('field3', 2000);
            $table->string('field4', 2000);
            $table->string('field5', 2000);
            $table->string('field6', 2000);
            $table->string('field7', 2000);
            $table->string('field8', 2000);
            $table->string('field9', 2000);
            $table->string('field10', 2000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_pengajuan');
    }
}
