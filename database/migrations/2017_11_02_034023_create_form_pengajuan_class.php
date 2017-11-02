<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateFormPengajuanClass extends Migration {
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
            $table->string('field1', 100);
            $table->string('field2', 100);
            $table->string('field3', 100);
            $table->string('field4', 100);
            $table->string('field5', 100);
            $table->string('field6', 100);
            $table->string('field7', 100);
            $table->string('field8', 100);
            $table->string('field9', 100);
            $table->string('field10', 100);
            $table->string('field11', 100);
            $table->string('field12', 100);
            $table->string('field13', 100);
        });

        Schema::create('form_pengajuan_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('form_pengajuan_id');
            $table->string('field1', 100)->nullable();
            $table->string('field2', 100)->nullable();
            $table->string('field3', 100)->nullable();
            $table->string('field4', 100)->nullable();
            $table->string('field5', 100)->nullable();
            $table->string('field6', 100)->nullable();
            $table->string('field7', 100)->nullable();
            $table->string('field8', 100)->nullable();
            $table->string('field9', 100)->nullable();
            $table->string('field10', 100)->nullable();
            $table->string('field11', 100)->nullable();
            $table->string('field12', 100)->nullable();
            $table->string('field13', 100)->nullable();
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
        Schema::drop('form_pengajuan');

        Schema::drop('form_pengajuan_i18n');
    }
}