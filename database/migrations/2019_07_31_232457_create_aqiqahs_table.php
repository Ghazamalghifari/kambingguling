<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAqiqahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aqiqahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('harga_1');
            $table->string('harga_2');
            $table->string('harga_3');
            $table->string('harga_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aqiqahs');
    }
}
