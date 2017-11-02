<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateContentProdukClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_produk', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('section_id', 100);
            $table->string('title', 100);
            $table->string('intro', 2000);
            $table->string('description', 2000);
        });

        Schema::create('content_produk_i18n', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->char('lang_code', 2);
            $table->unsignedInteger('content_produk_id');
            $table->string('title', 100)->nullable();
            $table->string('intro', 2000)->nullable();
            $table->string('description', 2000)->nullable();
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
        Schema::drop('content_produk');

        Schema::drop('content_produk_i18n');
    }
}