<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDestination extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination', function (Blueprint $table) {
            $table->id();
            $table->String('destination');
            $table->String('price');
            $table->String('min_guest');
            $table->text('description');
            $table->json('interest');
            $table->json('location');
            $table->json('id_tour')->nullable();
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
        Schema::dropIfExists('table_destination');
    }
}
