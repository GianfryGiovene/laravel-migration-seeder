<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',50);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code',50);
            $table->tinyInteger('number_of_carriages');
            $table->boolean('is_in_time');
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('trains');
    }
}
