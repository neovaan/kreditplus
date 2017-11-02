<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateContentKreditplusClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_kreditplus', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('title', 100);
            $table->string('intro', 2000);
            $table->text('description');
            $table->string('image', 100);
        });

        Schema::create('content_kreditplus_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('content_kreditplus_id');
            $table->string('title', 100)->nullable();
            $table->string('intro', 2000)->nullable();
            $table->text('description')->nullable();
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
        Schema::drop('content_kreditplus');

        Schema::drop('content_kreditplus_i18n');
    }
}