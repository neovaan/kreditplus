<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateVisimisiClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visimisi', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('visi', 2000);
            $table->text('misi');
            $table->text('nilai');
        });

        Schema::create('visimisi_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('visimisi_id');
            $table->string('visi', 2000)->nullable();
            $table->text('misi')->nullable();
            $table->text('nilai')->nullable();
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
        Schema::drop('visimisi');

        Schema::drop('visimisi_i18n');
    }
}