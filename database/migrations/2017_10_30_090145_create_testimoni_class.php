<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTestimoniClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('telp', 100);
            $table->string('email', 100);
            $table->text('pesan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testimoni');
    }
}