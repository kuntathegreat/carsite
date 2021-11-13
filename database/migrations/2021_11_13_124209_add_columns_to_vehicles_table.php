<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('category_id');
            $table->foreign('model_id')->references('id')->on('models');
            $table->unsignedBigInteger('model_id');
            $table->string('location');
            $table->string('condition');
            $table->string('second_condition');
            $table->string('transmission');
            $table->string('fuel');
            $table->string('body');
            $table->string('mileage');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
}
