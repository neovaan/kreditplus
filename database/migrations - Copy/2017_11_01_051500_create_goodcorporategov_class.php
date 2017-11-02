<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateGoodcorporategovClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodcorporategov', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('image', 100);
            $table->string('title', 100);
            $table->text('intro');
            $table->text('description');
        });

        Schema::create('goodcorporategov_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('goodcorporategov_id');
            $table->string('title', 100)->nullable();
            $table->text('intro')->nullable();
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
        Schema::drop('goodcorporategov');

        Schema::drop('goodcorporategov_i18n');
    }
}