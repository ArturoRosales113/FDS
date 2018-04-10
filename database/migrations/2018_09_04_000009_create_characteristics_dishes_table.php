<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacteristicsDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristics_dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('characteristics_id')->unsigned();
            $table->foreign('characteristics_id')
                ->references('id')->on('characteristics')
                ->onDelete('cascade');
            $table->integer('dish_id')->unsigned();
            $table->foreign('dish_id')
                ->references('id')->on('dishes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('characteristics_dishes');
    }
}
