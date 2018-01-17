<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateSimulasiClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulasi', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('title', 100);
            $table->string('field1', 100);
            $table->string('field2', 100);
            $table->string('field3', 100);
            $table->string('field4', 100);
            $table->string('txt1', 100);
            $table->string('txtbtn', 100);
            $table->string('angsuran1', 100);
            $table->string('angsuran2', 100);
            $table->string('txt2', 100);
        });

        Schema::create('simulasi_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('simulasi_id');
            $table->string('title', 100)->nullable();
            $table->string('field1', 100)->nullable();
            $table->string('field2', 100)->nullable();
            $table->string('field3', 100)->nullable();
            $table->string('field4', 100)->nullable();
            $table->string('txt1', 100)->nullable();
            $table->string('txtbtn', 100)->nullable();
            $table->string('angsuran1', 100)->nullable();
            $table->string('angsuran2', 100)->nullable();
            $table->string('txt2', 100)->nullable();
            $table->datetime('create_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('simulasi');

        Schema::drop('simulasi_i18n');
    }
}