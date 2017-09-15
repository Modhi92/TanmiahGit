<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductiveFamiliesTable extends Migration
{
    /**Productive
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Productive_families', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('phone_number');
            $table->string('Specialization');
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
        Schema::dropIfExists('Productive_families');
    }
}
