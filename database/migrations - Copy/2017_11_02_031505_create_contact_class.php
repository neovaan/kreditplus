<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateContactClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->string('alamat', 255);
            $table->string('fax', 100);
            $table->string('email', 100);
            $table->string('telp', 100);
            $table->string('field1', 100);
            $table->string('field2', 100);
            $table->string('field3', 100);
            $table->string('field4', 100);
        });

        Schema::create('contact_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('contact_id');
            $table->string('title', 100)->nullable();
            $table->text('description')->nullable();
            $table->string('field1', 100)->nullable();
            $table->string('field2', 100)->nullable();
            $table->string('field3', 100)->nullable();
            $table->string('field4', 100)->nullable();
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
        Schema::drop('contact');

        Schema::drop('contact_i18n');
    }
}