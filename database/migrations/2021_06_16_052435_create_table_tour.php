<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->text('desc');
            $table->json('interest');
            $table->json('plan');
            $table->json('feature');
            $table->String('min_guest');
            $table->String('price');
            $table->String('start');
            $table->String('end');
            $table->String('time');
            $table->text('main_image');
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
        Schema::dropIfExists('table_tour');
    }
}
