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
            $table->string('location')->nullable();
            $table->string('condition')->nullable();
            $table->string('second_condition')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuel')->nullable();
            $table->string('body')->nullable();
            $table->string('mileage')->nullable();
            $table->text('description')->nullable();
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
